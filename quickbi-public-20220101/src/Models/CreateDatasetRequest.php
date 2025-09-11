<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class CreateDatasetRequest extends Model
{
    /**
     * @var string
     */
    public $dsId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $targetDirectoryId;

    /**
     * @var string
     */
    public $userDefineCubeName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'dsId' => 'DsId',
        'tableName' => 'TableName',
        'targetDirectoryId' => 'TargetDirectoryId',
        'userDefineCubeName' => 'UserDefineCubeName',
        'userId' => 'UserId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dsId) {
            $res['DsId'] = $this->dsId;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->targetDirectoryId) {
            $res['TargetDirectoryId'] = $this->targetDirectoryId;
        }

        if (null !== $this->userDefineCubeName) {
            $res['UserDefineCubeName'] = $this->userDefineCubeName;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['DsId'])) {
            $model->dsId = $map['DsId'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['TargetDirectoryId'])) {
            $model->targetDirectoryId = $map['TargetDirectoryId'];
        }

        if (isset($map['UserDefineCubeName'])) {
            $model->userDefineCubeName = $map['UserDefineCubeName'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
