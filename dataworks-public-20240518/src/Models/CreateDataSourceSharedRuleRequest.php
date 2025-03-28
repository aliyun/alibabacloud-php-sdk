<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDataSourceSharedRuleRequest extends Model
{
    /**
     * @description The data source ID.
     *
     * This parameter is required.
     *
     * @example 144544
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @description Share data sources to the target project environment, including
     * - Dev (Development Environment)
     * - Prod (production environment)
     *
     * This parameter is required.
     *
     * @example Dev
     *
     * @var string
     */
    public $envType;

    /**
     * @description The user with which you want to share the data source. If you do not configure this parameter, the data source is shared to an entire workspace.
     *
     * @example 1107550004253538
     *
     * @var string
     */
    public $sharedUser;

    /**
     * @description The ID of the workspace to which you want to share the data source. You cannot share the data source to the workspace with which the data source is associated.
     *
     * This parameter is required.
     *
     * @example 106560
     *
     * @var int
     */
    public $targetProjectId;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'envType' => 'EnvType',
        'sharedUser' => 'SharedUser',
        'targetProjectId' => 'TargetProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->sharedUser) {
            $res['SharedUser'] = $this->sharedUser;
        }
        if (null !== $this->targetProjectId) {
            $res['TargetProjectId'] = $this->targetProjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataSourceSharedRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['SharedUser'])) {
            $model->sharedUser = $map['SharedUser'];
        }
        if (isset($map['TargetProjectId'])) {
            $model->targetProjectId = $map['TargetProjectId'];
        }

        return $model;
    }
}
