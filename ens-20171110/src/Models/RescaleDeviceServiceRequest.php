<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RescaleDeviceServiceRequest extends Model
{
    /**
     * @example 7aedc50b-b1cb-4a7c-9e3d-4cf3c9ee55a4
     *
     * @var string
     */
    public $appId;

    /**
     * @example m-5rynw9g1ow1e928lb83bqmbnf
     *
     * @var string
     */
    public $imageId;

    /**
     * @example 1
     *
     * @var int
     */
    public $ipType;

    /**
     * @example RegionId
     *
     * @var string
     */
    public $rescaleLevel;

    /**
     * @example Add
     *
     * @var string
     */
    public $rescaleType;

    /**
     * @example {\"imageId\":\"m-5s4z4c10avgwvwtn33gl2vgob\",\"ipType\":2,\"specName\":\"ens.pfb-c3m7.medium\"}
     *
     * @var string
     */
    public $resourceInfo;

    /**
     * @example [{\"regionCode\": \"cn-wuxi-telecom_unicom_cmcc-3\",    \"ispCode\": \"telecom\",    \"count\": 2	},{    \"regionCode\": \"cn-shanghai-cmcc\",    \"count\": 4	}]
     *
     * @var string
     */
    public $resourceSelector;

    /**
     * @example ens.a6e.large
     *
     * @var string
     */
    public $resourceSpec;

    /**
     * @example service-01c6dd6e93f040698566
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example 1800
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appId'            => 'AppId',
        'imageId'          => 'ImageId',
        'ipType'           => 'IpType',
        'rescaleLevel'     => 'RescaleLevel',
        'rescaleType'      => 'RescaleType',
        'resourceInfo'     => 'ResourceInfo',
        'resourceSelector' => 'ResourceSelector',
        'resourceSpec'     => 'ResourceSpec',
        'serviceId'        => 'ServiceId',
        'timeout'          => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }
        if (null !== $this->rescaleLevel) {
            $res['RescaleLevel'] = $this->rescaleLevel;
        }
        if (null !== $this->rescaleType) {
            $res['RescaleType'] = $this->rescaleType;
        }
        if (null !== $this->resourceInfo) {
            $res['ResourceInfo'] = $this->resourceInfo;
        }
        if (null !== $this->resourceSelector) {
            $res['ResourceSelector'] = $this->resourceSelector;
        }
        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = $this->resourceSpec;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RescaleDeviceServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }
        if (isset($map['RescaleLevel'])) {
            $model->rescaleLevel = $map['RescaleLevel'];
        }
        if (isset($map['RescaleType'])) {
            $model->rescaleType = $map['RescaleType'];
        }
        if (isset($map['ResourceInfo'])) {
            $model->resourceInfo = $map['ResourceInfo'];
        }
        if (isset($map['ResourceSelector'])) {
            $model->resourceSelector = $map['ResourceSelector'];
        }
        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = $map['ResourceSpec'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
