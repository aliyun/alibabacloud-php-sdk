<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class IncreaseNodesRequest extends Model
{
    /**
     * @description The application configurations. You can specify a maximum of 1,000 items.
     *
     * @example Month
     *
     * @var ApplicationConfig[]
     */
    public $applicationConfigs;

    /**
     * @description Indicates whether to automatically pay for the orders involved in the scale-out operation. This parameter takes effect only when the PaymentType parameter is set to Subscription. Valid values:
     *
     *   true: automatically pays for the order involved in this operation.
     *   false: does not automatically pay for the orders involved in this operation.
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $autoPayOrder;

    /**
     * @description Specifies whether to enable auto-renewal for nodes. Valid values:
     *
     *   true
     *   false (default value)
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of nodes. The number of incremental nodes for this scale-out. Valid values: 1 to 500.
     *
     * This parameter is required.
     * @example 3
     *
     * @var int
     */
    public $increaseNodeCount;

    /**
     * @description The minimum number of nodes that can be added. Valid values: 1 to 500.
     *
     *   If you configure this parameter, and the number of available Elastic Compute Service (ECS) instances is less than the value of the IncreaseNodeCount parameter, the system tries to add nodes based on the number specified by the `MinIncreaseNodeCount` parameter. If the minimum number of nodes are added, the scale-out status is `PARTIAL_COMPLETED`.
     *   If you do not configure this parameter, and the number of available ECS instances is less than the value of the IncreaseNodeCount parameter, the scale-out process fails. The scale-out status is `FAILED`.
     *
     * @var int
     */
    public $minIncreaseNodeCount;

    /**
     * @description The ID of the node group. The target node group to which you want to scale out the cluster.
     *
     * This parameter is required.
     * @example ng-869471354ecd****
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description The subscription duration. Valid values when the PaymentDurationUnit value is Month: 1, 2, 3, 4, 5, 6, 7, 8, 9, 12, 24, 36, 48, and 60.
     *
     * @example 12
     *
     * @var int
     */
    public $paymentDuration;

    /**
     * @description The unit of the subscription duration. Valid values:
     *
     *   Month
     *
     * @example Month
     *
     * @var string
     */
    public $paymentDurationUnit;

    /**
     * @description The ID of the region in which you want to create the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'applicationConfigs'   => 'ApplicationConfigs',
        'autoPayOrder'         => 'AutoPayOrder',
        'autoRenew'            => 'AutoRenew',
        'clusterId'            => 'ClusterId',
        'increaseNodeCount'    => 'IncreaseNodeCount',
        'minIncreaseNodeCount' => 'MinIncreaseNodeCount',
        'nodeGroupId'          => 'NodeGroupId',
        'paymentDuration'      => 'PaymentDuration',
        'paymentDurationUnit'  => 'PaymentDurationUnit',
        'regionId'             => 'RegionId',
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
        if (null !== $this->autoPayOrder) {
            $res['AutoPayOrder'] = $this->autoPayOrder;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->increaseNodeCount) {
            $res['IncreaseNodeCount'] = $this->increaseNodeCount;
        }
        if (null !== $this->minIncreaseNodeCount) {
            $res['MinIncreaseNodeCount'] = $this->minIncreaseNodeCount;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->paymentDuration) {
            $res['PaymentDuration'] = $this->paymentDuration;
        }
        if (null !== $this->paymentDurationUnit) {
            $res['PaymentDurationUnit'] = $this->paymentDurationUnit;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IncreaseNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationConfigs'])) {
            if (!empty($map['ApplicationConfigs'])) {
                $model->applicationConfigs = [];
                $n                         = 0;
                foreach ($map['ApplicationConfigs'] as $item) {
                    $model->applicationConfigs[$n++] = null !== $item ? ApplicationConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AutoPayOrder'])) {
            $model->autoPayOrder = $map['AutoPayOrder'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['IncreaseNodeCount'])) {
            $model->increaseNodeCount = $map['IncreaseNodeCount'];
        }
        if (isset($map['MinIncreaseNodeCount'])) {
            $model->minIncreaseNodeCount = $map['MinIncreaseNodeCount'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['PaymentDuration'])) {
            $model->paymentDuration = $map['PaymentDuration'];
        }
        if (isset($map['PaymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['PaymentDurationUnit'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
