<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ReleaseIPRequest extends Model
{
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
     * @example xxxyyy
     *
     * @var string
     */
    public $setupProjectId;
    protected $_name = [
        'deviceResourceId'  => 'DeviceResourceId',
        'deviceResourceIds' => 'DeviceResourceIds',
        'instanceId'        => 'InstanceId',
        'ipType'            => 'IpType',
        'setupProjectId'    => 'SetupProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->setupProjectId) {
            $res['SetupProjectId'] = $this->setupProjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseIPRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['SetupProjectId'])) {
            $model->setupProjectId = $map['SetupProjectId'];
        }

        return $model;
    }
}
