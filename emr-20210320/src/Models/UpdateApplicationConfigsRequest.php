<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicationConfigsRequest extends Model
{
    /**
     * @description The application configurations.
     *
     * This parameter is required.
     * @example CLUSTER
     *
     * @var UpdateApplicationConfig[]
     */
    public $applicationConfigs;

    /**
     * @description The application name.
     *
     * This parameter is required.
     * @example HDFS
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example c-e6a9d46e9267****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The operation performed on configuration items. Valid values:
     *
     *   ADD
     *   UPDATE
     *   DELETE
     *
     * @example ADD
     *
     * @var string
     */
    public $configAction;

    /**
     * @description The operation scope. Valid values:
     *
     *   CLUSTER
     *   NODE_GROUP
     *
     * @example CLUSTER
     *
     * @var string
     */
    public $configScope;

    /**
     * @description The description.
     *
     * @example 更新YARN内存配置。
     *
     * @var string
     */
    public $description;

    /**
     * @description The node group ID.
     *
     * @example ng-869471354ecd****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description The node ID.
     *
     * @example i-bp1cudc25w2bfwl5****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'applicationConfigs' => 'ApplicationConfigs',
        'applicationName'    => 'ApplicationName',
        'clusterId'          => 'ClusterId',
        'configAction'       => 'ConfigAction',
        'configScope'        => 'ConfigScope',
        'description'        => 'Description',
        'nodeGroupId'        => 'NodeGroupId',
        'nodeId'             => 'NodeId',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationConfigs) {
            $res['ApplicationConfigs'] = [];
            if (null !== $this->applicationConfigs && \is_array($this->applicationConfigs)) {
                $n = 0;
                foreach ($this->applicationConfigs as $item) {
                    $res['ApplicationConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->configAction) {
            $res['ConfigAction'] = $this->configAction;
        }
        if (null !== $this->configScope) {
            $res['ConfigScope'] = $this->configScope;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplicationConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationConfigs'])) {
            if (!empty($map['ApplicationConfigs'])) {
                $model->applicationConfigs = [];
                $n                         = 0;
                foreach ($map['ApplicationConfigs'] as $item) {
                    $model->applicationConfigs[$n++] = null !== $item ? UpdateApplicationConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ConfigAction'])) {
            $model->configAction = $map['ConfigAction'];
        }
        if (isset($map['ConfigScope'])) {
            $model->configScope = $map['ConfigScope'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
