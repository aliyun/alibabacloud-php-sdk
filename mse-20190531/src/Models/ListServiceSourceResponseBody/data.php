<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListServiceSourceResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListServiceSourceResponseBody\data\ingressOptions;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The type of the service source.
     *
     * @example ***
     *
     * @var string
     */
    public $address;

    /**
     * @description The ID of the gateway.
     *
     * @example 1
     *
     * @var int
     */
    public $bindingWithGateway;

    /**
     * @description The time when the service source was added.
     *
     * @example 1
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The time when the service source was last modified.
     *
     * @example 2022-01-07 18:07:57
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The unique ID of the service source.
     *
     * @example 2022-01-07 18:07:57
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var string[]
     */
    public $groupList;

    /**
     * @description The name of the service source.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description Programming language
     *
     * @var ingressOptions
     */
    public $ingressOptions;

    /**
     * @description The ID of the Container Service for Kubernetes (ACK) cluster, or the endpoint of the Microservices Engine (MSE) Nacos registry.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $pathList;

    /**
     * @description Indicates whether the service source is associated with the gateway.
     *
     * @example MSE
     *
     * @var string
     */
    public $source;

    /**
     * @description Query service sources
     *
     * @example mse-cn-***
     *
     * @var string
     */
    public $sourceUniqueId;

    /**
     * @description The source of the service source.
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
