<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListServiceSourceResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListServiceSourceResponseBody\data\ingressOptions;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the Container Service for Kubernetes (ACK) cluster or the endpoint of the Microservices Engine (MSE) registry.
     *
     * @example ***
     *
     * @var string
     */
    public $address;

    /**
     * @description Indicates whether the service source is associated with the gateway. The value 1 indicates that the service source is associated with the gateway.
     *
     * @example 1
     *
     * @var int
     */
    public $bindingWithGateway;

    /**
     * @description The ID of the gateway.
     *
     * @example 1
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-2u9uhd9283hd92hgd39g239dg2*****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The creation time.
     *
     * @example 2022-01-07 18:07:57
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The update time.
     *
     * @example 2022-01-07 18:07:57
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The array of service groups.
     *
     * @var string[]
     */
    public $groupList;

    /**
     * @description The ID.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description Support for Ingresses of applications.
     *
     * @var ingressOptions
     */
    public $ingressOptions;

    /**
     * @description The name.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The array of root paths of service lists.
     *
     * @var string[]
     */
    public $pathList;

    /**
     * @description The type of the service source.
     *
     * @example MSE
     *
     * @var string
     */
    public $source;

    /**
     * @description The unique ID of the service source.
     *
     * @example mse-cn-***
     *
     * @var string
     */
    public $sourceUniqueId;

    /**
     * @description The type.
     *
     * @example NACOS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'address'            => 'Address',
        'bindingWithGateway' => 'BindingWithGateway',
        'gatewayId'          => 'GatewayId',
        'gatewayUniqueId'    => 'GatewayUniqueId',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'groupList'          => 'GroupList',
        'id'                 => 'Id',
        'ingressOptions'     => 'IngressOptions',
        'name'               => 'Name',
        'pathList'           => 'PathList',
        'source'             => 'Source',
        'sourceUniqueId'     => 'SourceUniqueId',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->bindingWithGateway) {
            $res['BindingWithGateway'] = $this->bindingWithGateway;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->groupList) {
            $res['GroupList'] = $this->groupList;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ingressOptions) {
            $res['IngressOptions'] = null !== $this->ingressOptions ? $this->ingressOptions->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pathList) {
            $res['PathList'] = $this->pathList;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceUniqueId) {
            $res['SourceUniqueId'] = $this->sourceUniqueId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['BindingWithGateway'])) {
            $model->bindingWithGateway = $map['BindingWithGateway'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GroupList'])) {
            if (!empty($map['GroupList'])) {
                $model->groupList = $map['GroupList'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IngressOptions'])) {
            $model->ingressOptions = ingressOptions::fromMap($map['IngressOptions']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PathList'])) {
            if (!empty($map['PathList'])) {
                $model->pathList = $map['PathList'];
            }
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceUniqueId'])) {
            $model->sourceUniqueId = $map['SourceUniqueId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
