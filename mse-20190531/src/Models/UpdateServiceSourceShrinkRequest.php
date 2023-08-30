<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceSourceShrinkRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese.
     *   en: English.
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The address.
     *
     * @example c9ad2a0717032427e920754e25b49e3b5
     *
     * @var string
     */
    public $address;

    /**
     * @description The ID of the gateway.
     *
     * @example 429
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-cdd1bb9bfb8341e9805f931a3ba1f4c6
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The ID of the service source.
     *
     * @example 63
     *
     * @var int
     */
    public $id;

    /**
     * @description The configurations of Ingress resources.
     *
     * @example zh
     *
     * @var string
     */
    public $ingressOptionsRequestShrink;

    /**
     * @description The name.
     *
     * @example istio
     *
     * @var string
     */
    public $name;

    /**
     * @description An array of service root paths.
     *
     * @var string
     */
    public $pathListShrink;

    /**
     * @description The service source. Valid values:
     *
     *   K8s: ACK cluster.
     *   MSE: Nacos instance.
     *
     * @example K8s
     *
     * @var string
     */
    public $source;

    /**
     * @description The type of the service source. Valid values:
     *
     *   K8s: ACK cluster.
     *   NACOS: Nacos instance.
     *
     * @example K8s
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage'              => 'AcceptLanguage',
        'address'                     => 'Address',
        'gatewayId'                   => 'GatewayId',
        'gatewayUniqueId'             => 'GatewayUniqueId',
        'id'                          => 'Id',
        'ingressOptionsRequestShrink' => 'IngressOptionsRequest',
        'name'                        => 'Name',
        'pathListShrink'              => 'PathList',
        'source'                      => 'Source',
        'type'                        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ingressOptionsRequestShrink) {
            $res['IngressOptionsRequest'] = $this->ingressOptionsRequestShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pathListShrink) {
            $res['PathList'] = $this->pathListShrink;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceSourceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IngressOptionsRequest'])) {
            $model->ingressOptionsRequestShrink = $map['IngressOptionsRequest'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PathList'])) {
            $model->pathListShrink = $map['PathList'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
