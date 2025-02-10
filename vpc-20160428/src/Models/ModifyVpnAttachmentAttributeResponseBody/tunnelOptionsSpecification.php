<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\tunnelOptionsSpecification\tunnelBgpConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\tunnelOptionsSpecification\tunnelIkeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody\tunnelOptionsSpecification\tunnelIpsecConfig;

class tunnelOptionsSpecification extends Model
{
    /**
     * @var string
     */
    public $customerGatewayId;
    /**
     * @var bool
     */
    public $enableDpd;
    /**
     * @var bool
     */
    public $enableNatTraversal;
    /**
     * @var string
     */
    public $internetIp;
    /**
     * @var string
     */
    public $role;
    /**
     * @var string
     */
    public $state;
    /**
     * @var tunnelBgpConfig
     */
    public $tunnelBgpConfig;
    /**
     * @var string
     */
    public $tunnelId;
    /**
     * @var tunnelIkeConfig
     */
    public $tunnelIkeConfig;
    /**
     * @var int
     */
    public $tunnelIndex;
    /**
     * @var tunnelIpsecConfig
     */
    public $tunnelIpsecConfig;
    protected $_name = [
        'customerGatewayId'  => 'CustomerGatewayId',
        'enableDpd'          => 'EnableDpd',
        'enableNatTraversal' => 'EnableNatTraversal',
        'internetIp'         => 'InternetIp',
        'role'               => 'Role',
        'state'              => 'State',
        'tunnelBgpConfig'    => 'TunnelBgpConfig',
        'tunnelId'           => 'TunnelId',
        'tunnelIkeConfig'    => 'TunnelIkeConfig',
        'tunnelIndex'        => 'TunnelIndex',
        'tunnelIpsecConfig'  => 'TunnelIpsecConfig',
    ];

    public function validate()
    {
        if (null !== $this->tunnelBgpConfig) {
            $this->tunnelBgpConfig->validate();
        }
        if (null !== $this->tunnelIkeConfig) {
            $this->tunnelIkeConfig->validate();
        }
        if (null !== $this->tunnelIpsecConfig) {
            $this->tunnelIpsecConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerGatewayId) {
            $res['CustomerGatewayId'] = $this->customerGatewayId;
        }

        if (null !== $this->enableDpd) {
            $res['EnableDpd'] = $this->enableDpd;
        }

        if (null !== $this->enableNatTraversal) {
            $res['EnableNatTraversal'] = $this->enableNatTraversal;
        }

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->tunnelBgpConfig) {
            $res['TunnelBgpConfig'] = null !== $this->tunnelBgpConfig ? $this->tunnelBgpConfig->toArray($noStream) : $this->tunnelBgpConfig;
        }

        if (null !== $this->tunnelId) {
            $res['TunnelId'] = $this->tunnelId;
        }

        if (null !== $this->tunnelIkeConfig) {
            $res['TunnelIkeConfig'] = null !== $this->tunnelIkeConfig ? $this->tunnelIkeConfig->toArray($noStream) : $this->tunnelIkeConfig;
        }

        if (null !== $this->tunnelIndex) {
            $res['TunnelIndex'] = $this->tunnelIndex;
        }

        if (null !== $this->tunnelIpsecConfig) {
            $res['TunnelIpsecConfig'] = null !== $this->tunnelIpsecConfig ? $this->tunnelIpsecConfig->toArray($noStream) : $this->tunnelIpsecConfig;
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
        if (isset($map['CustomerGatewayId'])) {
            $model->customerGatewayId = $map['CustomerGatewayId'];
        }

        if (isset($map['EnableDpd'])) {
            $model->enableDpd = $map['EnableDpd'];
        }

        if (isset($map['EnableNatTraversal'])) {
            $model->enableNatTraversal = $map['EnableNatTraversal'];
        }

        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TunnelBgpConfig'])) {
            $model->tunnelBgpConfig = tunnelBgpConfig::fromMap($map['TunnelBgpConfig']);
        }

        if (isset($map['TunnelId'])) {
            $model->tunnelId = $map['TunnelId'];
        }

        if (isset($map['TunnelIkeConfig'])) {
            $model->tunnelIkeConfig = tunnelIkeConfig::fromMap($map['TunnelIkeConfig']);
        }

        if (isset($map['TunnelIndex'])) {
            $model->tunnelIndex = $map['TunnelIndex'];
        }

        if (isset($map['TunnelIpsecConfig'])) {
            $model->tunnelIpsecConfig = tunnelIpsecConfig::fromMap($map['TunnelIpsecConfig']);
        }

        return $model;
    }
}
