<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class CreateBasicEndpointGroupRequest extends Model
{
    /**
     * @description 全球加速实例Id
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description 客户端Token
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 终端节点组描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 终端节点地址
     *
     * @var string
     */
    public $endpointAddress;

    /**
     * @description 终端节点组所在地域
     *
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @description 终端节点类型
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description 终端节点组名称
     *
     * @var string
     */
    public $name;

    /**
     * @description Regionid
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'acceleratorId'       => 'AcceleratorId',
        'clientToken'         => 'ClientToken',
        'description'         => 'Description',
        'endpointAddress'     => 'EndpointAddress',
        'endpointGroupRegion' => 'EndpointGroupRegion',
        'endpointType'        => 'EndpointType',
        'name'                => 'Name',
        'regionId'            => 'RegionId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endpointAddress) {
            $res['EndpointAddress'] = $this->endpointAddress;
        }
        if (null !== $this->endpointGroupRegion) {
            $res['EndpointGroupRegion'] = $this->endpointGroupRegion;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBasicEndpointGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndpointAddress'])) {
            $model->endpointAddress = $map['EndpointAddress'];
        }
        if (isset($map['EndpointGroupRegion'])) {
            $model->endpointGroupRegion = $map['EndpointGroupRegion'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
