<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class UpdateClusterAutoRenewRequest extends Model
{
    /**
     * @var AutoRenewInstance[]
     */
    public $autoRenewInstances;

    /**
     * @var bool
     */
    public $clusterAutoRenew;

    /**
     * @var int
     */
    public $clusterAutoRenewDuration;

    /**
     * @var string
     */
    public $clusterAutoRenewDurationUnit;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $renewAllInstances;
    protected $_name = [
        'autoRenewInstances' => 'AutoRenewInstances',
        'clusterAutoRenew' => 'ClusterAutoRenew',
        'clusterAutoRenewDuration' => 'ClusterAutoRenewDuration',
        'clusterAutoRenewDurationUnit' => 'ClusterAutoRenewDurationUnit',
        'clusterId' => 'ClusterId',
        'regionId' => 'RegionId',
        'renewAllInstances' => 'RenewAllInstances',
    ];

    public function validate()
    {
        if (\is_array($this->autoRenewInstances)) {
            Model::validateArray($this->autoRenewInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenewInstances) {
            if (\is_array($this->autoRenewInstances)) {
                $res['AutoRenewInstances'] = [];
                $n1 = 0;
                foreach ($this->autoRenewInstances as $item1) {
                    $res['AutoRenewInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterAutoRenew) {
            $res['ClusterAutoRenew'] = $this->clusterAutoRenew;
        }

        if (null !== $this->clusterAutoRenewDuration) {
            $res['ClusterAutoRenewDuration'] = $this->clusterAutoRenewDuration;
        }

        if (null !== $this->clusterAutoRenewDurationUnit) {
            $res['ClusterAutoRenewDurationUnit'] = $this->clusterAutoRenewDurationUnit;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->renewAllInstances) {
            $res['RenewAllInstances'] = $this->renewAllInstances;
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
        if (isset($map['AutoRenewInstances'])) {
            if (!empty($map['AutoRenewInstances'])) {
                $model->autoRenewInstances = [];
                $n1 = 0;
                foreach ($map['AutoRenewInstances'] as $item1) {
                    $model->autoRenewInstances[$n1] = AutoRenewInstance::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClusterAutoRenew'])) {
            $model->clusterAutoRenew = $map['ClusterAutoRenew'];
        }

        if (isset($map['ClusterAutoRenewDuration'])) {
            $model->clusterAutoRenewDuration = $map['ClusterAutoRenewDuration'];
        }

        if (isset($map['ClusterAutoRenewDurationUnit'])) {
            $model->clusterAutoRenewDurationUnit = $map['ClusterAutoRenewDurationUnit'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RenewAllInstances'])) {
            $model->renewAllInstances = $map['RenewAllInstances'];
        }

        return $model;
    }
}
