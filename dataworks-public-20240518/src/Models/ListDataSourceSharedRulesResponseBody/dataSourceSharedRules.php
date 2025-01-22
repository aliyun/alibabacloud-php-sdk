<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataSourceSharedRulesResponseBody;

use AlibabaCloud\Dara\Model;

class dataSourceSharedRules extends Model
{
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $createUser;
    /**
     * @var int
     */
    public $dataSourceId;
    /**
     * @var string
     */
    public $envType;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $sharedDataSourceName;
    /**
     * @var string
     */
    public $sharedUser;
    /**
     * @var int
     */
    public $sourceProjectId;
    /**
     * @var int
     */
    public $targetProjectId;
    protected $_name = [
        'createTime'           => 'CreateTime',
        'createUser'           => 'CreateUser',
        'dataSourceId'         => 'DataSourceId',
        'envType'              => 'EnvType',
        'id'                   => 'Id',
        'sharedDataSourceName' => 'SharedDataSourceName',
        'sharedUser'           => 'SharedUser',
        'sourceProjectId'      => 'SourceProjectId',
        'targetProjectId'      => 'TargetProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->sharedDataSourceName) {
            $res['SharedDataSourceName'] = $this->sharedDataSourceName;
        }

        if (null !== $this->sharedUser) {
            $res['SharedUser'] = $this->sharedUser;
        }

        if (null !== $this->sourceProjectId) {
            $res['SourceProjectId'] = $this->sourceProjectId;
        }

        if (null !== $this->targetProjectId) {
            $res['TargetProjectId'] = $this->targetProjectId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['SharedDataSourceName'])) {
            $model->sharedDataSourceName = $map['SharedDataSourceName'];
        }

        if (isset($map['SharedUser'])) {
            $model->sharedUser = $map['SharedUser'];
        }

        if (isset($map['SourceProjectId'])) {
            $model->sourceProjectId = $map['SourceProjectId'];
        }

        if (isset($map['TargetProjectId'])) {
            $model->targetProjectId = $map['TargetProjectId'];
        }

        return $model;
    }
}
