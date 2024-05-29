<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterUsedUtilizationRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account. You do not need to specify this parameter because this parameter is discontinued.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. **The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe63****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the cluster. If the **MetricType** parameter is set to **CLUSTER**, enter the ID of the exclusive cluster. Otherwise, set this parameter to a node ID.
     *
     * This parameter is required.
     * @example nodeid
     *
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @description The ID of the data migration or synchronization task.
     *
     * @example k2gm967v16f****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The cluster environment. Default value: **ALIYUN**.
     *
     * @example ALIYUN
     *
     * @var string
     */
    public $env;

    /**
     * @description Specifies whether to query the metrics of the cluster or a node. Default value: CLUSTER. Valid values:
     *
     *   **CLUSTER**: query the metrics of the cluster.
     *   **NODE**: query the metrics of a node.
     *
     * @example NODE
     *
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $ownerID;

    /**
     * @description The ID of the region in which the Data Transmission Service (DTS) instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'accountId'          => 'AccountId',
        'clientToken'        => 'ClientToken',
        'dedicatedClusterId' => 'DedicatedClusterId',
        'dtsJobId'           => 'DtsJobId',
        'env'                => 'Env',
        'metricType'         => 'MetricType',
        'ownerID'            => 'OwnerID',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
        'securityToken'      => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dedicatedClusterId) {
            $res['DedicatedClusterId'] = $this->dedicatedClusterId;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterUsedUtilizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DedicatedClusterId'])) {
            $model->dedicatedClusterId = $map['DedicatedClusterId'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
