<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\CreateTairAIGatewayInstanceResponseBody\instanceResults;

class CreateTairAIGatewayInstanceResponseBody extends Model
{
    /**
     * @var int
     */
    public $failCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var instanceResults
     */
    public $instanceResults;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $VClusterId;

    /**
     * @var string
     */
    public $vkName;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'failCount' => 'FailCount',
        'instanceId' => 'InstanceId',
        'instanceResults' => 'InstanceResults',
        'nodeId' => 'NodeId',
        'orderId' => 'OrderId',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'successCount' => 'SuccessCount',
        'totalCount' => 'TotalCount',
        'VClusterId' => 'VClusterId',
        'vkName' => 'VkName',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->instanceResults) {
            $this->instanceResults->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceResults) {
            $res['InstanceResults'] = null !== $this->instanceResults ? $this->instanceResults->toArray($noStream) : $this->instanceResults;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->VClusterId) {
            $res['VClusterId'] = $this->VClusterId;
        }

        if (null !== $this->vkName) {
            $res['VkName'] = $this->vkName;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceResults'])) {
            $model->instanceResults = instanceResults::fromMap($map['InstanceResults']);
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['VClusterId'])) {
            $model->VClusterId = $map['VClusterId'];
        }

        if (isset($map['VkName'])) {
            $model->vkName = $map['VkName'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
