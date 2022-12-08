<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class GetBasicEndpointResponseBody extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $endPointId;

    /**
     * @var string
     */
    public $endpointAddress;

    /**
     * @var string
     */
    public $endpointGroupId;

    /**
     * @var string
     */
    public $endpointSubAddress;

    /**
     * @var string
     */
    public $endpointSubAddressType;

    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $endpointZoneId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'acceleratorId'          => 'AcceleratorId',
        'endPointId'             => 'EndPointId',
        'endpointAddress'        => 'EndpointAddress',
        'endpointGroupId'        => 'EndpointGroupId',
        'endpointSubAddress'     => 'EndpointSubAddress',
        'endpointSubAddressType' => 'EndpointSubAddressType',
        'endpointType'           => 'EndpointType',
        'endpointZoneId'         => 'EndpointZoneId',
        'name'                   => 'Name',
        'requestId'              => 'RequestId',
        'state'                  => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->endPointId) {
            $res['EndPointId'] = $this->endPointId;
        }
        if (null !== $this->endpointAddress) {
            $res['EndpointAddress'] = $this->endpointAddress;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->endpointSubAddress) {
            $res['EndpointSubAddress'] = $this->endpointSubAddress;
        }
        if (null !== $this->endpointSubAddressType) {
            $res['EndpointSubAddressType'] = $this->endpointSubAddressType;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->endpointZoneId) {
            $res['EndpointZoneId'] = $this->endpointZoneId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBasicEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['EndPointId'])) {
            $model->endPointId = $map['EndPointId'];
        }
        if (isset($map['EndpointAddress'])) {
            $model->endpointAddress = $map['EndpointAddress'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['EndpointSubAddress'])) {
            $model->endpointSubAddress = $map['EndpointSubAddress'];
        }
        if (isset($map['EndpointSubAddressType'])) {
            $model->endpointSubAddressType = $map['EndpointSubAddressType'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['EndpointZoneId'])) {
            $model->endpointZoneId = $map['EndpointZoneId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
