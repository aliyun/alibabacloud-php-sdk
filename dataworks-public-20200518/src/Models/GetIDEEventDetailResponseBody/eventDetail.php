<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\deletedFile;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\fileExecutionCommand;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\tableModel;

class eventDetail extends Model
{
    /**
     * @var committedFile
     */
    public $committedFile;
    /**
     * @var deletedFile
     */
    public $deletedFile;
    /**
     * @var fileExecutionCommand
     */
    public $fileExecutionCommand;
    /**
     * @var tableModel
     */
    public $tableModel;
    protected $_name = [
        'committedFile'        => 'CommittedFile',
        'deletedFile'          => 'DeletedFile',
        'fileExecutionCommand' => 'FileExecutionCommand',
        'tableModel'           => 'TableModel',
    ];

    public function validate()
    {
        if (null !== $this->committedFile) {
            $this->committedFile->validate();
        }
        if (null !== $this->deletedFile) {
            $this->deletedFile->validate();
        }
        if (null !== $this->fileExecutionCommand) {
            $this->fileExecutionCommand->validate();
        }
        if (null !== $this->tableModel) {
            $this->tableModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->committedFile) {
            $res['CommittedFile'] = null !== $this->committedFile ? $this->committedFile->toArray($noStream) : $this->committedFile;
        }

        if (null !== $this->deletedFile) {
            $res['DeletedFile'] = null !== $this->deletedFile ? $this->deletedFile->toArray($noStream) : $this->deletedFile;
        }

        if (null !== $this->fileExecutionCommand) {
            $res['FileExecutionCommand'] = null !== $this->fileExecutionCommand ? $this->fileExecutionCommand->toArray($noStream) : $this->fileExecutionCommand;
        }

        if (null !== $this->tableModel) {
            $res['TableModel'] = null !== $this->tableModel ? $this->tableModel->toArray($noStream) : $this->tableModel;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommittedFile'])) {
            $model->committedFile = committedFile::fromMap($map['CommittedFile']);
        }

        if (isset($map['DeletedFile'])) {
            $model->deletedFile = deletedFile::fromMap($map['DeletedFile']);
        }

        if (isset($map['FileExecutionCommand'])) {
            $model->fileExecutionCommand = fileExecutionCommand::fromMap($map['FileExecutionCommand']);
        }

        if (isset($map['TableModel'])) {
            $model->tableModel = tableModel::fromMap($map['TableModel']);
        }

        return $model;
    }
}
