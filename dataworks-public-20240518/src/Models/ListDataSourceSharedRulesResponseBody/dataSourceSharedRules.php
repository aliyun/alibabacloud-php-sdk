<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataSourceSharedRulesResponseBody;

use AlibabaCloud\Tea\Model;

class dataSourceSharedRules extends Model
{
    /**
     * @example 1724379762000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $createUser;

    /**
     * @example 1
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @example Dev
     *
     * @var string
     */
    public $envType;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example targetProject.datasource
     *
     * @var string
     */
    public $sharedDataSourceName;

    /**
     * @example 1
     *
     * @var string
     */
    public $sharedUser;

    /**
     * @example 1
     *
     * @var int
     */
    public $sourceProjectId;

    /**
     * @example 1
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return dataSourceSharedRules
     */
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
