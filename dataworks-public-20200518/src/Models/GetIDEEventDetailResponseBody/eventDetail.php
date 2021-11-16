<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\committedFile;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\deletedFile;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\fileExecutionCommand;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetIDEEventDetailResponseBody\eventDetail\tableModel;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->committedFile) {
            $res['CommittedFile'] = null !== $this->committedFile ? $this->committedFile->toMap() : null;
        }
        if (null !== $this->deletedFile) {
            $res['DeletedFile'] = null !== $this->deletedFile ? $this->deletedFile->toMap() : null;
        }
        if (null !== $this->fileExecutionCommand) {
            $res['FileExecutionCommand'] = null !== $this->fileExecutionCommand ? $this->fileExecutionCommand->toMap() : null;
        }
        if (null !== $this->tableModel) {
            $res['TableModel'] = null !== $this->tableModel ? $this->tableModel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventDetail
     */
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
