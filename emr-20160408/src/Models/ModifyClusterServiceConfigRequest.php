<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterServiceConfigRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $configParams;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $customConfigParams;

    /**
     * @var string[]
     */
    public $gatewayClusterIdList;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $hostInstanceId;

    /**
     * @var bool
     */
    public $refreshHostConfig;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'clusterId'            => 'ClusterId',
        'comment'              => 'Comment',
        'configParams'         => 'ConfigParams',
        'configType'           => 'ConfigType',
        'customConfigParams'   => 'CustomConfigParams',
        'gatewayClusterIdList' => 'GatewayClusterIdList',
        'groupId'              => 'GroupId',
        'hostInstanceId'       => 'HostInstanceId',
        'refreshHostConfig'    => 'RefreshHostConfig',
        'regionId'             => 'RegionId',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'serviceName'          => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->configParams) {
            $res['ConfigParams'] = $this->configParams;
        }
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }
        if (null !== $this->customConfigParams) {
            $res['CustomConfigParams'] = $this->customConfigParams;
        }
        if (null !== $this->gatewayClusterIdList) {
            $res['GatewayClusterIdList'] = $this->gatewayClusterIdList;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->hostInstanceId) {
            $res['HostInstanceId'] = $this->hostInstanceId;
        }
        if (null !== $this->refreshHostConfig) {
            $res['RefreshHostConfig'] = $this->refreshHostConfig;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterServiceConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ConfigParams'])) {
            $model->configParams = $map['ConfigParams'];
        }
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }
        if (isset($map['CustomConfigParams'])) {
            $model->customConfigParams = $map['CustomConfigParams'];
        }
        if (isset($map['GatewayClusterIdList'])) {
            if (!empty($map['GatewayClusterIdList'])) {
                $model->gatewayClusterIdList = $map['GatewayClusterIdList'];
            }
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['HostInstanceId'])) {
            $model->hostInstanceId = $map['HostInstanceId'];
        }
        if (isset($map['RefreshHostConfig'])) {
            $model->refreshHostConfig = $map['RefreshHostConfig'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
