<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class ModifyDefenseThresholdRequest extends Model
{
    /**
     * @var int
     */
    public $bps;

    /**
     * @var string
     */
    public $ddosRegionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var bool
     */
    public $isAuto;

    /**
     * @var int
     */
    public $pps;
    protected $_name = [
        'bps'          => 'Bps',
        'ddosRegionId' => 'DdosRegionId',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'internetIp'   => 'InternetIp',
        'isAuto'       => 'IsAuto',
        'pps'          => 'Pps',
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
        if (null !== $this->ddosRegionId) {
            $res['DdosRegionId'] = $this->ddosRegionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->isAuto) {
            $res['IsAuto'] = $this->isAuto;
        }
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDefenseThresholdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['DdosRegionId'])) {
            $model->ddosRegionId = $map['DdosRegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IsAuto'])) {
            $model->isAuto = $map['IsAuto'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }

        return $model;
    }
}
