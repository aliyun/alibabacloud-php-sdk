<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnAttachmentRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnAttachmentRequest\tunnelOptionsSpecification\tunnelBgpConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnAttachmentRequest\tunnelOptionsSpecification\tunnelIkeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnAttachmentRequest\tunnelOptionsSpecification\tunnelIpsecConfig;

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
     * @var tunnelBgpConfig
     */
    public $tunnelBgpConfig;

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
        'customerGatewayId' => 'CustomerGatewayId',
        'enableDpd' => 'EnableDpd',
        'enableNatTraversal' => 'EnableNatTraversal',
        'tunnelBgpConfig' => 'TunnelBgpConfig',
        'tunnelIkeConfig' => 'TunnelIkeConfig',
        'tunnelIndex' => 'TunnelIndex',
        'tunnelIpsecConfig' => 'TunnelIpsecConfig',
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

        if (null !== $this->tunnelBgpConfig) {
            $res['TunnelBgpConfig'] = null !== $this->tunnelBgpConfig ? $this->tunnelBgpConfig->toArray($noStream) : $this->tunnelBgpConfig;
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

        if (isset($map['TunnelBgpConfig'])) {
            $model->tunnelBgpConfig = tunnelBgpConfig::fromMap($map['TunnelBgpConfig']);
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
