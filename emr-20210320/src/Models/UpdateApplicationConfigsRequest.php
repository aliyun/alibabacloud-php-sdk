<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicationConfigsRequest extends Model
{
    /**
     * @description 应用配置列表。
     *
     * @example CLUSTER
     *
     * @var UpdateApplicationConfig[]
     */
    public $applicationConfigs;

    /**
     * @description 应用名称。
     *
     * @example HDFS
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description 集群ID。
     *
     * @example c-e6a9d46e9267****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 配置项操作。取值范围：
     * - UPDATE：更新。
     * @example ADD
     *
     * @var string
     */
    public $configAction;

    /**
     * @description 配置操作范围。取值范围：
     * - NODE_GROUP：节点组范围。
     * @example CLUSTER
     *
     * @var string
     */
    public $configScope;

    /**
     * @description 本次更新操作描述。
     *
     * @example 更新YARN内存配置。
     *
     * @var string
     */
    public $description;

    /**
     * @description 节点组ID。
     *
     * @example ng-869471354ecd****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description 节点ID。
     *
     * @example i-bp1cudc25w2bfwl5****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description 区域ID。
     *
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
