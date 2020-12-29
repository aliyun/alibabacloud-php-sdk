<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosThresholdResponseBody;

use AlibabaCloud\Tea\Model;

class thresholds extends Model
{
    /**
     * @var string
     */
    public $ddosType;

    /**
     * @var bool
     */
    public $isAuto;

    /**
     * @var int
     */
    public $maxBps;

    /**
     * @var int
     */
    public $elasticBps;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $bps;

    /**
     * @var int
     */
    public $pps;

    /**
     * @var int
     */
    public $maxPps;
    protected $_name = [
        'ddosType'   => 'DdosType',
        'isAuto'     => 'IsAuto',
        'maxBps'     => 'MaxBps',
        'elasticBps' => 'ElasticBps',
        'instanceId' => 'InstanceId',
        'bps'        => 'Bps',
        'pps'        => 'Pps',
        'maxPps'     => 'MaxPps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddosType) {
            $res['DdosType'] = $this->ddosType;
        }
        if (null !== $this->isAuto) {
            $res['IsAuto'] = $this->isAuto;
        }
        if (null !== $this->maxBps) {
            $res['MaxBps'] = $this->maxBps;
        }
        if (null !== $this->elasticBps) {
            $res['ElasticBps'] = $this->elasticBps;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }
        if (null !== $this->maxPps) {
            $res['MaxPps'] = $this->maxPps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return thresholds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdosType'])) {
            $model->ddosType = $map['DdosType'];
        }
        if (isset($map['IsAuto'])) {
            $model->isAuto = $map['IsAuto'];
        }
        if (isset($map['MaxBps'])) {
            $model->maxBps = $map['MaxBps'];
        }
        if (isset($map['ElasticBps'])) {
            $model->elasticBps = $map['ElasticBps'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }
        if (isset($map['MaxPps'])) {
            $model->maxPps = $map['MaxPps'];
        }

        return $model;
    }
}
