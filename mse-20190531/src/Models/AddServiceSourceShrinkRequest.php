<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class AddServiceSourceShrinkRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh-CN (default): Chinese
     *   en-US: English
     *   ja: Japanese
     *
     * @example zh-CN
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description Specifies whether to monitor Ingress classes.
     *
     * @example c9ad2a0717032427e920754e25b49e3b5
     *
     * @var string
     */
    public $address;

    /**
     * @description Specifies whether to update the Ingress status.
     *
     * @example gw-c70622ff52fe49beb29bea9a6f52****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The data structure.
     *
     * @var string
     */
    public $groupListShrink;

    /**
     * @description The list of service groups.
     *
     * @var string
     */
    public $ingressOptionsRequestShrink;

    /**
     * @description The namespace whose resources you want to monitor.
     *
     * @example istio
     *
     * @var string
     */
    public $name;

    /**
     * @description The HTTP status code returned.
     *
     * @var string
     */
    public $pathListShrink;

    /**
     * @description The service source.
     *
     *   K8s: ACK cluster
     *   NACOS: MSE Nacos instance
     *
     * @example K8s,MSE
     *
     * @var string
     */
    public $source;

    /**
     * @description The list of security groups to be authorized. You can specify security groups to allow backend services to access data sources that you create.
     *
     * @var string
     */
    public $toAuthorizeSecurityGroupsShrink;

    /**
     * @description The type of the service source.
     *
     *   K8s: Container Service for Kubernetes (ACK) cluster
     *   NACOS: Nacos instance
     *
     * @example The Ingress configuration.
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'address' => 'Address',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'groupListShrink' => 'GroupList',
        'ingressOptionsRequestShrink' => 'IngressOptionsRequest',
        'name' => 'Name',
        'pathListShrink' => 'PathList',
        'source' => 'Source',
        'toAuthorizeSecurityGroupsShrink' => 'ToAuthorizeSecurityGroups',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->groupListShrink) {
            $res['GroupList'] = $this->groupListShrink;
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
        if (null !== $this->toAuthorizeSecurityGroupsShrink) {
            $res['ToAuthorizeSecurityGroups'] = $this->toAuthorizeSecurityGroupsShrink;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddServiceSourceShrinkRequest
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
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GroupList'])) {
            $model->groupListShrink = $map['GroupList'];
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
        if (isset($map['ToAuthorizeSecurityGroups'])) {
            $model->toAuthorizeSecurityGroupsShrink = $map['ToAuthorizeSecurityGroups'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
