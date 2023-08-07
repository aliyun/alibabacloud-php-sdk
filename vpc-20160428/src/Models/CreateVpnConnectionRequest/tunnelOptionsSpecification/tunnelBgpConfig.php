<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnConnectionRequest\tunnelOptionsSpecification;

use AlibabaCloud\Tea\Model;

class tunnelBgpConfig extends Model
{
    /**
     * @description 隧道本端（阿里云侧）的自治系统号。自治系统号取值范围：**1**~**4294967295**。默认值：**45104**。
     *
     * > - 当您为IPsec连接开启BGP功能后（即指定**EnableTunnelsBgp**参数的值为**true**）需要配置该参数。
     * - 建议您使用自治系统号的私有号码与阿里云建立BGP连接。自治系统号的私有号码范围请自行查阅文档。
     * @example 65530
     *
     * @var int
     */
    public $localAsn;

    /**
     * @description 隧道本端（阿里云侧）的BGP地址。该地址为BGP网段内的一个IP地址。
     *
     * @example 169.254.10.1
     *
     * @var string
     */
    public $localBgpIp;

    /**
     * @description 隧道的BGP网段。该网段需是一个在169.254.0.0/16内的掩码长度为30的网段。
     *
     * >在一个VPN网关实例下，每个隧道的BGP网段需保持唯一。
     * @example 169.254.10.0/30
     *
     * @var string
     */
    public $tunnelCidr;
    protected $_name = [
        'localAsn'   => 'LocalAsn',
        'localBgpIp' => 'LocalBgpIp',
        'tunnelCidr' => 'TunnelCidr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localAsn) {
            $res['LocalAsn'] = $this->localAsn;
        }
        if (null !== $this->localBgpIp) {
            $res['LocalBgpIp'] = $this->localBgpIp;
        }
        if (null !== $this->tunnelCidr) {
            $res['TunnelCidr'] = $this->tunnelCidr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tunnelBgpConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalAsn'])) {
            $model->localAsn = $map['LocalAsn'];
        }
        if (isset($map['LocalBgpIp'])) {
            $model->localBgpIp = $map['LocalBgpIp'];
        }
        if (isset($map['TunnelCidr'])) {
            $model->tunnelCidr = $map['TunnelCidr'];
        }

        return $model;
    }
}
