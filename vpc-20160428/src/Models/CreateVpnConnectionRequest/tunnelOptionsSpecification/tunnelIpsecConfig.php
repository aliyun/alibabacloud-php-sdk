<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateVpnConnectionRequest\tunnelOptionsSpecification;

use AlibabaCloud\Tea\Model;

class tunnelIpsecConfig extends Model
{
    /**
     * @description 第二阶段协商的认证算法。
     *
     * <props="intl"><ph>取值：**md5**、**sha1**、**sha256**、**sha384**、**sha512**。默认值：**md5**。</ph></props>
     *
     * <props="china"><ph>如果VPN网关实例类型为普通型，则取值：**md5**、**sha1**、**sha256**、**sha384**、**sha512**。默认值：**md5**。</ph></props>
     *
     * <props="china"><ph>如果VPN网关实例类型为国密型，则取值为**sm3**（默认值）。</ph></props>
     * @example md5
     *
     * @var string
     */
    public $ipsecAuthAlg;

    /**
     * @description 第二阶段协商的加密算法。
     *
     * <props="intl"><ph>取值：**aes**、**aes192**、**aes256**、**des**或**3des**。默认值：**aes**。 </ph></props>
     *
     * <props="china"><ph>如果VPN网关实例类型为普通型，则取值为**aes**、**aes192**、**aes256**、**des**或**3des**。默认值：**aes**。</ph></props>
     *
     * <props="china"><ph>如果VPN网关实例类型为国密型，则取值为**sm4**（默认值）。</ph></props>
     * @example aes
     *
     * @var string
     */
    public $ipsecEncAlg;

    /**
     * @description 第二阶段协商出的SA的生存周期。单位：秒。
     *
     * 取值范围：**0**~**86400**。默认值：**86400**。
     * @example 86400
     *
     * @var int
     */
    public $ipsecLifetime;

    /**
     * @description 第二阶段协商使用的Diffie-Hellman密钥交换算法。默认值：**group2**。
     *
     * 取值：**disabled**、**group1**、**group2**、**group5**、**group14**。
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
