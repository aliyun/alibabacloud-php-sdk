<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\AddServiceSourceRequest\ingressOptionsRequest;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddServiceSourceRequest\toAuthorizeSecurityGroups;
use AlibabaCloud\Tea\Model;

class AddServiceSourceRequest extends Model
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
     * @var string[]
     */
    public $groupList;

    /**
     * @description The list of service groups.
     *
     * @var ingressOptionsRequest
     */
    public $ingressOptionsRequest;

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
     * @var string[]
     */
    public $pathList;

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
     * @var toAuthorizeSecurityGroups[]
     */
    public $toAuthorizeSecurityGroups;

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
        'acceptLanguage'            => 'AcceptLanguage',
        'address'                   => 'Address',
        'gatewayUniqueId'           => 'GatewayUniqueId',
        'groupList'                 => 'GroupList',
        'ingressOptionsRequest'     => 'IngressOptionsRequest',
        'name'                      => 'Name',
        'pathList'                  => 'PathList',
        'source'                    => 'Source',
        'toAuthorizeSecurityGroups' => 'ToAuthorizeSecurityGroups',
        'type'                      => 'Type',
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
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->groupList) {
            $res['GroupList'] = $this->groupList;
        }
        if (null !== $this->ingressOptionsRequest) {
            $res['IngressOptionsRequest'] = null !== $this->ingressOptionsRequest ? $this->ingressOptionsRequest->toMap() : null;
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
        if (null !== $this->toAuthorizeSecurityGroups) {
            $res['ToAuthorizeSecurityGroups'] = [];
            if (null !== $this->toAuthorizeSecurityGroups && \is_array($this->toAuthorizeSecurityGroups)) {
                $n = 0;
                foreach ($this->toAuthorizeSecurityGroups as $item) {
                    $res['ToAuthorizeSecurityGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddServiceSourceRequest
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
            if (!empty($map['GroupList'])) {
                $model->groupList = $map['GroupList'];
            }
        }
        if (isset($map['IngressOptionsRequest'])) {
            $model->ingressOptionsRequest = ingressOptionsRequest::fromMap($map['IngressOptionsRequest']);
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
        if (isset($map['ToAuthorizeSecurityGroups'])) {
            if (!empty($map['ToAuthorizeSecurityGroups'])) {
                $model->toAuthorizeSecurityGroups = [];
                $n                                = 0;
                foreach ($map['ToAuthorizeSecurityGroups'] as $item) {
                    $model->toAuthorizeSecurityGroups[$n++] = null !== $item ? toAuthorizeSecurityGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
