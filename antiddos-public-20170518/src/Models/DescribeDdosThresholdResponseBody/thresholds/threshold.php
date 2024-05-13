<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosThresholdResponseBody\thresholds;

use AlibabaCloud\Tea\Model;

class threshold extends Model
{
    /**
     * @description If the value of the **DdosType** parameter is **defense**, the Bps parameter indicates the current traffic scrubbing threshold. Unit: Mbit/s.
     *
     * If the value of the **DdosType** parameter is **blackhole**, the Bps parameter indicates the basic protection threshold. Unit: Mbit/s.
     * @example 500
     *
     * @var int
     */
    public $bps;

    /**
     * @description The type of the threshold. Valid values:
     *
     *   **defense**: traffic scrubbing threshold
     *   **blackhole**: DDoS mitigation threshold
     *
     * @example defense
     *
     * @var string
     */
    public $ddosType;

    /**
     * @description The burstable protection threshold (the maximum DDoS mitigation threshold). Unit: Mbit/s.
     *
     * > This parameter is returned only when the value of the **DdosType** parameter is **blackhole**.
     * @example 12310
     *
     * @var int
     */
    public $elasticBps;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp10bclrt56fblts****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address of the asset.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description Indicates whether the threshold is automatically adjusted. Valid values:
     *
     *   **true**: The scrubbing thresholds are automatically adjusted based on the traffic load on the asset.
     *   **false**: The scrubbing thresholds are not automatically adjusted. You must manually specify the scrubbing thresholds.
     *
     * @example false
     *
     * @var bool
     */
    public $isAuto;

    /**
     * @description The maximum traffic scrubbing threshold. Unit: Mbit/s.
     *
     * @example 1024
     *
     * @var int
     */
    public $maxBps;

    /**
     * @description The maximum packet scrubbing threshold. Unit: pps.
     *
     * @example 150000
     *
     * @var int
     */
    public $maxPps;

    /**
     * @description The packet scrubbing threshold. Unit: pps.
     *
     * > This parameter is returned only when the value of the **DdosType** parameter is **defense**.
     * @example 150000
     *
     * @var int
     */
    public $pps;
    protected $_name = [
        'bps'        => 'Bps',
        'ddosType'   => 'DdosType',
        'elasticBps' => 'ElasticBps',
        'instanceId' => 'InstanceId',
        'internetIp' => 'InternetIp',
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
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
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
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
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
