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
     * @description The data snapshot when the file is committed and deployed.
     *
     * The value of this parameter is not empty only when the message type is IDE_FILE_SUBMIT_BEFORE or IDE_FILE_DEPLOY_BEFORE.
     * @var committedFile
     */
    public $committedFile;

    /**
     * @description The data snapshot when the file is deleted. The value of this parameter is not empty only when the message type is IDE_FILE_DELETE_BEFORE.
     *
     * @var deletedFile
     */
    public $deletedFile;

    /**
     * @description The data snapshot when the code in the file is run. The value of this parameter is not empty only when the message type is IDE_FILE_EXECUTE_BEFORE.
     *
     * @var fileExecutionCommand
     */
    public $fileExecutionCommand;

    /**
     * @description The data snapshot when the table is committed and deployed. The value of this parameter is not empty only when the message type is IDE_TABLE_SUBMIT_BEFORE or IDE_TABLE_DEPLOY_BEFORE.
     *
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
