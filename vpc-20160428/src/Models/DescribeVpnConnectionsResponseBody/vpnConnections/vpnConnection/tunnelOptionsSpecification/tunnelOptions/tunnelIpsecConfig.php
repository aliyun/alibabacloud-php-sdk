<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponseBody\vpnConnections\vpnConnection\tunnelOptionsSpecification\tunnelOptions;

use AlibabaCloud\Tea\Model;

class tunnelIpsecConfig extends Model
{
    /**
     * @description IPsec阶段认证算法。
     *
     * @example sha1
     *
     * @var string
     */
    public $ipsecAuthAlg;

    /**
     * @description IPsec阶段加密算法。
     *
     * @example aes
     *
     * @var string
     */
    public $ipsecEncAlg;

    /**
     * @description IPsec阶段生存时间。单位：秒。
     *
     * @example 86400
     *
     * @var string
     */
    public $ipsecLifetime;

    /**
     * @description IPsec阶段DH分组。
     *
     * @example group2
     *
     * @var string
     */
    public $ipsecPfs;
    protected $_name = [
        'ipsecAuthAlg'  => 'IpsecAuthAlg',
        'ipsecEncAlg'   => 'IpsecEncAlg',
        'ipsecLifetime' => 'IpsecLifetime',
        'ipsecPfs'      => 'IpsecPfs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipsecAuthAlg) {
            $res['IpsecAuthAlg'] = $this->ipsecAuthAlg;
        }
        if (null !== $this->ipsecEncAlg) {
            $res['IpsecEncAlg'] = $this->ipsecEncAlg;
        }
        if (null !== $this->ipsecLifetime) {
            $res['IpsecLifetime'] = $this->ipsecLifetime;
        }
        if (null !== $this->ipsecPfs) {
            $res['IpsecPfs'] = $this->ipsecPfs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tunnelIpsecConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpsecAuthAlg'])) {
            $model->ipsecAuthAlg = $map['IpsecAuthAlg'];
        }
        if (isset($map['IpsecEncAlg'])) {
            $model->ipsecEncAlg = $map['IpsecEncAlg'];
        }
        if (isset($map['IpsecLifetime'])) {
            $model->ipsecLifetime = $map['IpsecLifetime'];
        }
        if (isset($map['IpsecPfs'])) {
            $model->ipsecPfs = $map['IpsecPfs'];
        }

        return $model;
    }
}
