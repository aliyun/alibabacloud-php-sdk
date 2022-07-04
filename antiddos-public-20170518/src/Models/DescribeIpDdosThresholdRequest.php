<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpDdosThresholdRequest extends Model
{
    /**
     * @var string
     */
    public $ddosRegionId;

    /**
     * @var string
     */
    public $ddosType;

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
    protected $_name = [
        'ddosRegionId' => 'DdosRegionId',
        'ddosType'     => 'DdosType',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'internetIp'   => 'InternetIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddosRegionId) {
            $res['DdosRegionId'] = $this->ddosRegionId;
        }
        if (null !== $this->ddosType) {
            $res['DdosType'] = $this->ddosType;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpDdosThresholdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdosRegionId'])) {
            $model->ddosRegionId = $map['DdosRegionId'];
        }
        if (isset($map['DdosType'])) {
            $model->ddosType = $map['DdosType'];
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

        return $model;
    }
}
