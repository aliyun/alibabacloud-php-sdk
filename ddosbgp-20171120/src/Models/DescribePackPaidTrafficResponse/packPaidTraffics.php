<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribePackPaidTrafficResponse;

use AlibabaCloud\Tea\Model;

class packPaidTraffics extends Model
{
    /**
     * @var string
     */
    public $instanceId;

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
    public $paidCapacity;

    /**
     * @var float
     */
    public $totalCapacity;

    /**
     * @var float
     */
    public $maxAttack;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'startTime'        => 'StartTime',
        'baseBandwidth'    => 'BaseBandwidth',
        'elasticBandwidth' => 'ElasticBandwidth',
        'paidCapacity'     => 'PaidCapacity',
        'totalCapacity'    => 'TotalCapacity',
        'maxAttack'        => 'MaxAttack',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('baseBandwidth', $this->baseBandwidth, true);
        Model::validateRequired('elasticBandwidth', $this->elasticBandwidth, true);
        Model::validateRequired('paidCapacity', $this->paidCapacity, true);
        Model::validateRequired('totalCapacity', $this->totalCapacity, true);
        Model::validateRequired('maxAttack', $this->maxAttack, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->baseBandwidth) {
            $res['BaseBandwidth'] = $this->baseBandwidth;
        }
        if (null !== $this->elasticBandwidth) {
            $res['ElasticBandwidth'] = $this->elasticBandwidth;
        }
        if (null !== $this->paidCapacity) {
            $res['PaidCapacity'] = $this->paidCapacity;
        }
        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }
        if (null !== $this->maxAttack) {
            $res['MaxAttack'] = $this->maxAttack;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['BaseBandwidth'])) {
            $model->baseBandwidth = $map['BaseBandwidth'];
        }
        if (isset($map['ElasticBandwidth'])) {
            $model->elasticBandwidth = $map['ElasticBandwidth'];
        }
        if (isset($map['PaidCapacity'])) {
            $model->paidCapacity = $map['PaidCapacity'];
        }
        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }
        if (isset($map['MaxAttack'])) {
            $model->maxAttack = $map['MaxAttack'];
        }

        return $model;
    }
}
