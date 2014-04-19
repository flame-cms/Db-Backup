<?php
/**
 * @author: Jiří Šifalda <sifalda.jiri@gmail.com>
 */
namespace App\Presenters;

use Nette\Application\UI\Presenter;

class BackupPresenter extends Presenter
{

	/**
	 * @inject
	 * @var \Flame\DbBackup\IBackup
	 */
	public $backup;

	public function actionDefault()
	{
		$this->backup->create($this->getContext()->expand('%tempDir%' . '/backups'));
		$this->terminate();
	}
}