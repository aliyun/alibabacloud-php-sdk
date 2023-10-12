<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ApplyIPRequest extends Model
{
    /**
     * @example xxxyyy
     *
     * @var string
     */
    public $businessTypeId;

    /**
     * @example {}
     *
     * @var string
     */
    public $businessTypeParams;

    /**
     * @example deviceResourceId
     *
     * @var string
     */
    public $deviceResourceId;

    /**
     * @var string[]
     */
    public $deviceResourceIds;

    /**
     * @example instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example LOOPBACK_SEGMENT、INTERCONNECTION_SEGMENT  LOOPBACK、BUSINESS、  INTERCONNECTION
     *
     * @var string
     */
    public $ipType;

    /**
     * @example 0
     *
     * @var string
     */
    public $loopbackPort;

    /**
     * @example {}
     *
     * @var string
     */
    public $netLocation;

    /**
     * @example xxxyyy
     *
     * @var string
     */
    public $setupProjectId;
    protected $_name = [
        'businessTypeId'     => 'BusinessTypeId',
        'businessTypeParams' => 'BusinessTypeParams',
        'deviceResourceId'   => 'DeviceResourceId',
        'deviceResourceIds'  => 'DeviceResourceIds',
        'instanceId'         => 'InstanceId',
        'ipType'             => 'IpType',
        'loopbackPort'       => 'LoopbackPort',
        'netLocation'        => 'NetLocation',
        'setupProjectId'     => 'SetupProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessTypeId) {
            $res['BusinessTypeId'] = $this->businessTypeId;
        }
        if (null !== $this->businessTypeParams) {
            $res['BusinessTypeParams'] = $this->businessTypeParams;
        }
        if (null !== $this->deviceResourceId) {
            $res['DeviceResourceId'] = $this->deviceResourceId;
        }
        if (null !== $this->deviceResourceIds) {
            $res['DeviceResourceIds'] = $this->deviceResourceIds;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }
        if (null !== $this->loopbackPort) {
            $res['LoopbackPort'] = $this->loopbackPort;
        }
        if (null !== $this->netLocation) {
            $res['NetLocation'] = $this->netLocation;
        }
        if (null !== $this->setupProjectId) {
            $res['SetupProjectId'] = $this->setupProjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyIPRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessTypeId'])) {
            $model->businessTypeId = $map['BusinessTypeId'];
        }
        if (isset($map['BusinessTypeParams'])) {
            $model->businessTypeParams = $map['BusinessTypeParams'];
        }
        if (isset($map['DeviceResourceId'])) {
            $model->deviceResourceId = $map['DeviceResourceId'];
        }
        if (isset($map['DeviceResourceIds'])) {
            if (!empty($map['DeviceResourceIds'])) {
                $model->deviceResourceIds = $map['DeviceResourceIds'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }
        if (isset($map['LoopbackPort'])) {
            $model->loopbackPort = $map['LoopbackPort'];
        }
        if (isset($map['NetLocation'])) {
            $model->netLocation = $map['NetLocation'];
        }
        if (isset($map['SetupProjectId'])) {
            $model->setupProjectId = $map['SetupProjectId'];
        }

        return $model;
    }
}
