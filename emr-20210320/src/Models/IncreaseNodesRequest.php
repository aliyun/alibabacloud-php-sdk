<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class IncreaseNodesRequest extends Model
{
    /**
     * @var ApplicationConfig[]
     */
    public $applicationConfigs;

    /**
     * @var bool
     */
    public $autoPayOrder;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $increaseNodeCount;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var int
     */
    public $paymentDuration;

    /**
     * @var string
     */
    public $paymentDurationUnit;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'applicationConfigs'  => 'ApplicationConfigs',
        'autoPayOrder'        => 'AutoPayOrder',
        'clusterId'           => 'ClusterId',
        'increaseNodeCount'   => 'IncreaseNodeCount',
        'nodeGroupId'         => 'NodeGroupId',
        'paymentDuration'     => 'PaymentDuration',
        'paymentDurationUnit' => 'PaymentDurationUnit',
        'regionId'            => 'RegionId',
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
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->increaseNodeCount) {
            $res['IncreaseNodeCount'] = $this->increaseNodeCount;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['IncreaseNodeCount'])) {
            $model->increaseNodeCount = $map['IncreaseNodeCount'];
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
