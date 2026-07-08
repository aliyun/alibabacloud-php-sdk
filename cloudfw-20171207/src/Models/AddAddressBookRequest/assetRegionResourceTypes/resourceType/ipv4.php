<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddAddressBookRequest\assetRegionResourceTypes\resourceType;

use AlibabaCloud\Dara\Model;

class ipv4 extends Model
{
    /**
     * @var bool
     */
    public $aiGatewayEIP;

    /**
     * @var bool
     */
    public $albEIP;

    /**
     * @var bool
     */
    public $apiGatewayEIP;

    /**
     * @var bool
     */
    public $bastionHostEgressIP;

    /**
     * @var bool
     */
    public $bastionHostIP;

    /**
     * @var bool
     */
    public $bastionHostIngressIP;

    /**
     * @var bool
     */
    public $EIP;

    /**
     * @var bool
     */
    public $ecsEIP;

    /**
     * @var bool
     */
    public $ecsPublicIP;

    /**
     * @var bool
     */
    public $eniEIP;

    /**
     * @var bool
     */
    public $gaEIP;

    /**
     * @var bool
     */
    public $HAVIP;

    /**
     * @var bool
     */
    public $natEIP;

    /**
     * @var bool
     */
    public $natPublicIP;

    /**
     * @var bool
     */
    public $nlbEIP;

    /**
     * @var bool
     */
    public $slbEIP;

    /**
     * @var bool
     */
    public $slbPublicIP;
    protected $_name = [
        'aiGatewayEIP' => 'AiGatewayEIP',
        'albEIP' => 'AlbEIP',
        'apiGatewayEIP' => 'ApiGatewayEIP',
        'bastionHostEgressIP' => 'BastionHostEgressIP',
        'bastionHostIP' => 'BastionHostIP',
        'bastionHostIngressIP' => 'BastionHostIngressIP',
        'EIP' => 'EIP',
        'ecsEIP' => 'EcsEIP',
        'ecsPublicIP' => 'EcsPublicIP',
        'eniEIP' => 'EniEIP',
        'gaEIP' => 'GaEIP',
        'HAVIP' => 'HAVIP',
        'natEIP' => 'NatEIP',
        'natPublicIP' => 'NatPublicIP',
        'nlbEIP' => 'NlbEIP',
        'slbEIP' => 'SlbEIP',
        'slbPublicIP' => 'SlbPublicIP',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiGatewayEIP) {
            $res['AiGatewayEIP'] = $this->aiGatewayEIP;
        }

        if (null !== $this->albEIP) {
            $res['AlbEIP'] = $this->albEIP;
        }

        if (null !== $this->apiGatewayEIP) {
            $res['ApiGatewayEIP'] = $this->apiGatewayEIP;
        }

        if (null !== $this->bastionHostEgressIP) {
            $res['BastionHostEgressIP'] = $this->bastionHostEgressIP;
        }

        if (null !== $this->bastionHostIP) {
            $res['BastionHostIP'] = $this->bastionHostIP;
        }

        if (null !== $this->bastionHostIngressIP) {
            $res['BastionHostIngressIP'] = $this->bastionHostIngressIP;
        }

        if (null !== $this->EIP) {
            $res['EIP'] = $this->EIP;
        }

        if (null !== $this->ecsEIP) {
            $res['EcsEIP'] = $this->ecsEIP;
        }

        if (null !== $this->ecsPublicIP) {
            $res['EcsPublicIP'] = $this->ecsPublicIP;
        }

        if (null !== $this->eniEIP) {
            $res['EniEIP'] = $this->eniEIP;
        }

        if (null !== $this->gaEIP) {
            $res['GaEIP'] = $this->gaEIP;
        }

        if (null !== $this->HAVIP) {
            $res['HAVIP'] = $this->HAVIP;
        }

        if (null !== $this->natEIP) {
            $res['NatEIP'] = $this->natEIP;
        }

        if (null !== $this->natPublicIP) {
            $res['NatPublicIP'] = $this->natPublicIP;
        }

        if (null !== $this->nlbEIP) {
            $res['NlbEIP'] = $this->nlbEIP;
        }

        if (null !== $this->slbEIP) {
            $res['SlbEIP'] = $this->slbEIP;
        }

        if (null !== $this->slbPublicIP) {
            $res['SlbPublicIP'] = $this->slbPublicIP;
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
        if (isset($map['AiGatewayEIP'])) {
            $model->aiGatewayEIP = $map['AiGatewayEIP'];
        }

        if (isset($map['AlbEIP'])) {
            $model->albEIP = $map['AlbEIP'];
        }

        if (isset($map['ApiGatewayEIP'])) {
            $model->apiGatewayEIP = $map['ApiGatewayEIP'];
        }

        if (isset($map['BastionHostEgressIP'])) {
            $model->bastionHostEgressIP = $map['BastionHostEgressIP'];
        }

        if (isset($map['BastionHostIP'])) {
            $model->bastionHostIP = $map['BastionHostIP'];
        }

        if (isset($map['BastionHostIngressIP'])) {
            $model->bastionHostIngressIP = $map['BastionHostIngressIP'];
        }

        if (isset($map['EIP'])) {
            $model->EIP = $map['EIP'];
        }

        if (isset($map['EcsEIP'])) {
            $model->ecsEIP = $map['EcsEIP'];
        }

        if (isset($map['EcsPublicIP'])) {
            $model->ecsPublicIP = $map['EcsPublicIP'];
        }

        if (isset($map['EniEIP'])) {
            $model->eniEIP = $map['EniEIP'];
        }

        if (isset($map['GaEIP'])) {
            $model->gaEIP = $map['GaEIP'];
        }

        if (isset($map['HAVIP'])) {
            $model->HAVIP = $map['HAVIP'];
        }

        if (isset($map['NatEIP'])) {
            $model->natEIP = $map['NatEIP'];
        }

        if (isset($map['NatPublicIP'])) {
            $model->natPublicIP = $map['NatPublicIP'];
        }

        if (isset($map['NlbEIP'])) {
            $model->nlbEIP = $map['NlbEIP'];
        }

        if (isset($map['SlbEIP'])) {
            $model->slbEIP = $map['SlbEIP'];
        }

        if (isset($map['SlbPublicIP'])) {
            $model->slbPublicIP = $map['SlbPublicIP'];
        }

        return $model;
    }
}
