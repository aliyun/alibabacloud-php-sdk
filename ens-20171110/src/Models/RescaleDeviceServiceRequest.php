<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RescaleDeviceServiceRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var int
     */
    public $ipType;

    /**
     * @var string
     */
    public $rescaleLevel;

    /**
     * @var string
     */
    public $rescaleType;

    /**
     * @var string
     */
    public $resourceInfo;

    /**
     * @var string
     */
    public $resourceSelector;

    /**
     * @var string
     */
    public $resourceSpec;

    /**
     * @var string
     */
    public $serviceId;

    /**
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
