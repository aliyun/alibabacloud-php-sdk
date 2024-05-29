<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewaySlbRequest\VServiceList;
use AlibabaCloud\Tea\Model;

class AddGatewaySlbRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The unique ID of the gateway.
     *
     * This parameter is required.
     * @example gw-9cdcf8e4f58144059e73ff4c5ef9****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The HTTP port number (virtual service group).
     *
     * @example 80
     *
     * @var int
     */
    public $httpPort;

    /**
     * @description The HTTPS port number (virtual service group).
     *
     * @example 443
     *
     * @var int
     */
    public $httpsPort;

    /**
     * @description The ID of the HTTPS virtual service group.
     *
     * @example 353
     *
     * @var string
     */
    public $httpsVServerGroupId;

    /**
     * @description The service weight.
     *
     * @example 80
     *
     * @var int
     */
    public $serviceWeight;

    /**
     * @description The ID of the SLB instance.
     *
     * This parameter is required.
     * @example lb-bp18t6jjskwxh6wy1****
     *
     * @var string
     */
    public $slbId;

    /**
     * @description The type of the service source. Valid values:
     *
     *   PUB_NET: Internet
     *   PRIVATE_NET: VPC
     *
     * @example PUB_NET
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the HTTP virtual service group.
     *
     * @example 353
     *
     * @var string
     */
    public $VServerGroupId;

    /**
     * @description The SLB monitoring information.
     *
     * @var VServiceList[]
     */
    public $VServiceList;
    protected $_name = [
        'acceptLanguage'      => 'AcceptLanguage',
        'gatewayUniqueId'     => 'GatewayUniqueId',
        'httpPort'            => 'HttpPort',
        'httpsPort'           => 'HttpsPort',
        'httpsVServerGroupId' => 'HttpsVServerGroupId',
        'serviceWeight'       => 'ServiceWeight',
        'slbId'               => 'SlbId',
        'type'                => 'Type',
        'VServerGroupId'      => 'VServerGroupId',
        'VServiceList'        => 'VServiceList',
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
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->httpPort) {
            $res['HttpPort'] = $this->httpPort;
        }
        if (null !== $this->httpsPort) {
            $res['HttpsPort'] = $this->httpsPort;
        }
        if (null !== $this->httpsVServerGroupId) {
            $res['HttpsVServerGroupId'] = $this->httpsVServerGroupId;
        }
        if (null !== $this->serviceWeight) {
            $res['ServiceWeight'] = $this->serviceWeight;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->VServiceList) {
            $res['VServiceList'] = [];
            if (null !== $this->VServiceList && \is_array($this->VServiceList)) {
                $n = 0;
                foreach ($this->VServiceList as $item) {
                    $res['VServiceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGatewaySlbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['HttpPort'])) {
            $model->httpPort = $map['HttpPort'];
        }
        if (isset($map['HttpsPort'])) {
            $model->httpsPort = $map['HttpsPort'];
        }
        if (isset($map['HttpsVServerGroupId'])) {
            $model->httpsVServerGroupId = $map['HttpsVServerGroupId'];
        }
        if (isset($map['ServiceWeight'])) {
            $model->serviceWeight = $map['ServiceWeight'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['VServiceList'])) {
            if (!empty($map['VServiceList'])) {
                $model->VServiceList = [];
                $n                   = 0;
                foreach ($map['VServiceList'] as $item) {
                    $model->VServiceList[$n++] = null !== $item ? VServiceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
