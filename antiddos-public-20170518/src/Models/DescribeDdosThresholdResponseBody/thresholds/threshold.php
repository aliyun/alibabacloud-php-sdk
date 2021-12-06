<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosThresholdResponseBody\thresholds;

use AlibabaCloud\Tea\Model;

class threshold extends Model
{
    /**
     * @var int
     */
    public $bps;

    /**
     * @var string
     */
    public $ddosType;

    /**
     * @var int
     */
    public $elasticBps;

    /**
     * @var string
     */
    public $instanceId;

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
    public $maxPps;

    /**
     * @var int
     */
    public $pps;
    protected $_name = [
        'bps'        => 'Bps',
        'ddosType'   => 'DdosType',
        'elasticBps' => 'ElasticBps',
        'instanceId' => 'InstanceId',
        'isAuto'     => 'IsAuto',
        'maxBps'     => 'MaxBps',
        'maxPps'     => 'MaxPps',
        'pps'        => 'Pps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->ddosType) {
            $res['DdosType'] = $this->ddosType;
        }
        if (null !== $this->elasticBps) {
            $res['ElasticBps'] = $this->elasticBps;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isAuto) {
            $res['IsAuto'] = $this->isAuto;
        }
        if (null !== $this->maxBps) {
            $res['MaxBps'] = $this->maxBps;
        }
        if (null !== $this->maxPps) {
            $res['MaxPps'] = $this->maxPps;
        }
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return threshold
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['DdosType'])) {
            $model->ddosType = $map['DdosType'];
        }
        if (isset($map['ElasticBps'])) {
            $model->elasticBps = $map['ElasticBps'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsAuto'])) {
            $model->isAuto = $map['IsAuto'];
        }
        if (isset($map['MaxBps'])) {
            $model->maxBps = $map['MaxBps'];
        }
        if (isset($map['MaxPps'])) {
            $model->maxPps = $map['MaxPps'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }

        return $model;
    }
}
