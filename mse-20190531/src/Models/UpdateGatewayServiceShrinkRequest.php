<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class UpdateGatewayServiceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var string
     */
    public $dnsServerListShrink;
    /**
     * @var int
     */
    public $gatewayId;
    /**
     * @var string
     */
    public $gatewayUniqueId;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $ipListShrink;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $servicePort;
    /**
     * @var string
     */
    public $serviceProtocol;
    /**
     * @var string
     */
    public $tlsSetting;
    protected $_name = [
        'acceptLanguage'      => 'AcceptLanguage',
        'dnsServerListShrink' => 'DnsServerList',
        'gatewayId'           => 'GatewayId',
        'gatewayUniqueId'     => 'GatewayUniqueId',
        'id'                  => 'Id',
        'ipListShrink'        => 'IpList',
        'name'                => 'Name',
        'servicePort'         => 'ServicePort',
        'serviceProtocol'     => 'ServiceProtocol',
        'tlsSetting'          => 'TlsSetting',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->dnsServerListShrink) {
            $res['DnsServerList'] = $this->dnsServerListShrink;
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

        if (null !== $this->ipListShrink) {
            $res['IpList'] = $this->ipListShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }

        if (null !== $this->serviceProtocol) {
            $res['ServiceProtocol'] = $this->serviceProtocol;
        }

        if (null !== $this->tlsSetting) {
            $res['TlsSetting'] = $this->tlsSetting;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['DnsServerList'])) {
            $model->dnsServerListShrink = $map['DnsServerList'];
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

        if (isset($map['IpList'])) {
            $model->ipListShrink = $map['IpList'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }

        if (isset($map['ServiceProtocol'])) {
            $model->serviceProtocol = $map['ServiceProtocol'];
        }

        if (isset($map['TlsSetting'])) {
            $model->tlsSetting = $map['TlsSetting'];
        }

        return $model;
    }
}
