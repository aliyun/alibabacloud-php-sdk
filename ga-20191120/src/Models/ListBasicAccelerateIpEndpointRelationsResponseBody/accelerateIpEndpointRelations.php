<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAccelerateIpEndpointRelationsResponseBody;

use AlibabaCloud\Tea\Model;

class accelerateIpEndpointRelations extends Model
{
    /**
     * @var string
     */
    public $accelerateIpId;

    /**
     * @var string
     */
    public $endpointAddress;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $endpointName;

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
    public $ipAddress;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'accelerateIpId'         => 'AccelerateIpId',
        'endpointAddress'        => 'EndpointAddress',
        'endpointId'             => 'EndpointId',
        'endpointName'           => 'EndpointName',
        'endpointSubAddress'     => 'EndpointSubAddress',
        'endpointSubAddressType' => 'EndpointSubAddressType',
        'endpointType'           => 'EndpointType',
        'endpointZoneId'         => 'EndpointZoneId',
        'ipAddress'              => 'IpAddress',
        'state'                  => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateIpId) {
            $res['AccelerateIpId'] = $this->accelerateIpId;
        }
        if (null !== $this->endpointAddress) {
            $res['EndpointAddress'] = $this->endpointAddress;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
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
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accelerateIpEndpointRelations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateIpId'])) {
            $model->accelerateIpId = $map['AccelerateIpId'];
        }
        if (isset($map['EndpointAddress'])) {
            $model->endpointAddress = $map['EndpointAddress'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
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
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
