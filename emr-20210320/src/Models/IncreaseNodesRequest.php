<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

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
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $increaseNodeCount;

    /**
     * @var int
     */
    public $minIncreaseNodeCount;

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
     * @var Promotion[]
     */
    public $promotions;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'applicationConfigs' => 'ApplicationConfigs',
        'autoPayOrder' => 'AutoPayOrder',
        'autoRenew' => 'AutoRenew',
        'clusterId' => 'ClusterId',
        'increaseNodeCount' => 'IncreaseNodeCount',
        'minIncreaseNodeCount' => 'MinIncreaseNodeCount',
        'nodeGroupId' => 'NodeGroupId',
        'paymentDuration' => 'PaymentDuration',
        'paymentDurationUnit' => 'PaymentDurationUnit',
        'promotions' => 'Promotions',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->applicationConfigs)) {
            Model::validateArray($this->applicationConfigs);
        }
        if (\is_array($this->promotions)) {
            Model::validateArray($this->promotions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationConfigs) {
            if (\is_array($this->applicationConfigs)) {
                $res['ApplicationConfigs'] = [];
                $n1 = 0;
                foreach ($this->applicationConfigs as $item1) {
                    $res['ApplicationConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->promotions) {
            if (\is_array($this->promotions)) {
                $res['Promotions'] = [];
                $n1 = 0;
                foreach ($this->promotions as $item1) {
                    $res['Promotions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ApplicationConfigs'])) {
            if (!empty($map['ApplicationConfigs'])) {
                $model->applicationConfigs = [];
                $n1 = 0;
                foreach ($map['ApplicationConfigs'] as $item1) {
                    $model->applicationConfigs[$n1] = ApplicationConfig::fromMap($item1);
                    ++$n1;
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

        if (isset($map['Promotions'])) {
            if (!empty($map['Promotions'])) {
                $model->promotions = [];
                $n1 = 0;
                foreach ($map['Promotions'] as $item1) {
                    $model->promotions[$n1] = Promotion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
