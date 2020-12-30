<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribePackPaidTrafficResponseBody;

use AlibabaCloud\Tea\Model;

class packPaidTraffics extends Model
{
    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $baseBandwidth;

    /**
     * @var int
     */
    public $elasticBandwidth;

    /**
     * @var float
     */
    public $totalCapacity;

    /**
     * @var float
     */
    public $maxAttack;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var float
     */
    public $paidCapacity;
    protected $_name = [
        'startTime'        => 'StartTime',
        'baseBandwidth'    => 'BaseBandwidth',
        'elasticBandwidth' => 'ElasticBandwidth',
        'totalCapacity'    => 'TotalCapacity',
        'maxAttack'        => 'MaxAttack',
        'instanceId'       => 'InstanceId',
        'paidCapacity'     => 'PaidCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->baseBandwidth) {
            $res['BaseBandwidth'] = $this->baseBandwidth;
        }
        if (null !== $this->elasticBandwidth) {
            $res['ElasticBandwidth'] = $this->elasticBandwidth;
        }
        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }
        if (null !== $this->maxAttack) {
            $res['MaxAttack'] = $this->maxAttack;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->paidCapacity) {
            $res['PaidCapacity'] = $this->paidCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packPaidTraffics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['BaseBandwidth'])) {
            $model->baseBandwidth = $map['BaseBandwidth'];
        }
        if (isset($map['ElasticBandwidth'])) {
            $model->elasticBandwidth = $map['ElasticBandwidth'];
        }
        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }
        if (isset($map['MaxAttack'])) {
            $model->maxAttack = $map['MaxAttack'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PaidCapacity'])) {
            $model->paidCapacity = $map['PaidCapacity'];
        }

        return $model;
    }
}
