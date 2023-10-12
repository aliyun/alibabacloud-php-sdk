<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class UpdateDeviceResourceRequest extends Model
{
    /**
     * @description 更新数据
     *
     * @example zzz
     *
     * @var string
     */
    public $data;

    /**
     * @example deviceResourceId
     *
     * @var string
     */
    public $deviceResourceId;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
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
     * @description 建设项目id
     *
     * @example xxx_zzz
     *
     * @var string
     */
    public $setupProjectId;

    /**
     * @description 操作类型
     *
     * @example LOCATION、HOSTNAME、IP_ADDRESS、  CONFIGURATION_GENERATOR
     *
     * @var string
     */
    public $updateType;
    protected $_name = [
        'data'              => 'Data',
        'deviceResourceId'  => 'DeviceResourceId',
        'deviceResourceIds' => 'DeviceResourceIds',
        'instanceId'        => 'InstanceId',
        'setupProjectId'    => 'SetupProjectId',
        'updateType'        => 'UpdateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
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
        if (null !== $this->setupProjectId) {
            $res['SetupProjectId'] = $this->setupProjectId;
        }
        if (null !== $this->updateType) {
            $res['UpdateType'] = $this->updateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDeviceResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
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
        if (isset($map['SetupProjectId'])) {
            $model->setupProjectId = $map['SetupProjectId'];
        }
        if (isset($map['UpdateType'])) {
            $model->updateType = $map['UpdateType'];
        }

        return $model;
    }
}
