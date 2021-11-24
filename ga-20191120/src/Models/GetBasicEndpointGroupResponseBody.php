<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class GetBasicEndpointGroupResponseBody extends Model
{
    /**
     * @description 全球加速实例Id
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description 终端节点组描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 终端节点组地址
     *
     * @var string
     */
    public $endpointAddress;

    /**
     * @description 终端节点组Id
     *
     * @var string
     */
    public $endpointGroupId;

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
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 终端节点组状态
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'acceleratorId'       => 'AcceleratorId',
        'description'         => 'Description',
        'endpointAddress'     => 'EndpointAddress',
        'endpointGroupId'     => 'EndpointGroupId',
        'endpointGroupRegion' => 'EndpointGroupRegion',
        'endpointType'        => 'EndpointType',
        'name'                => 'Name',
        'requestId'           => 'RequestId',
        'state'               => 'State',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endpointAddress) {
            $res['EndpointAddress'] = $this->endpointAddress;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
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
     * @return GetBasicEndpointGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndpointAddress'])) {
            $model->endpointAddress = $map['EndpointAddress'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
