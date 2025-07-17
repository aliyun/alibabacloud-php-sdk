<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataSourceSharedRulesResponseBody;

use AlibabaCloud\Tea\Model;

class dataSourceSharedRules extends Model
{
    /**
     * @description The time when the rule was created. This value is a UNIX timestamp.
     *
     * @example 1724379762000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the user who creates the rule.
     *
     * @example 1
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The data source ID. You can call the [ListDataSources](https://help.aliyun.com/document_detail/211431.html) operation to query the ID.
     *
     * @example 1
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @description The environment to which the target data source belongs. The values are as follows:
     * - Dev: the development environment.
     * - Prod: the production environment.
     *
     * @example Dev
     *
     * @var string
     */
    public $envType;

    /**
     * @description The rule ID.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the data source in the destination workspace.
     *
     * @example targetProject.datasource
     *
     * @var string
     */
    public $sharedDataSourceName;

    /**
     * @description The user in the workspace to which the data source is shared. If the data source is shared to the entire workspace, this parameter is left empty.
     *
     * @example 1
     *
     * @var string
     */
    public $sharedUser;

    /**
     * @description The ID of the workspace with which the data source is associated.
     *
     * @example 1
     *
     * @var int
     */
    public $sourceProjectId;

    /**
     * @description The ID of the workspace to which the data source is shared.
     *
     * @example 1
     *
     * @var int
     */
    public $targetProjectId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'dataSourceId' => 'DataSourceId',
        'envType' => 'EnvType',
        'id' => 'Id',
        'sharedDataSourceName' => 'SharedDataSourceName',
        'sharedUser' => 'SharedUser',
        'sourceProjectId' => 'SourceProjectId',
        'targetProjectId' => 'TargetProjectId',
    ];

    public function validate() {}

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
