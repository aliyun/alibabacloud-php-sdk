<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyTunnelAttributeRequest\tunnelOptionsSpecification;

use AlibabaCloud\Tea\Model;

class tunnelIpsecConfig extends Model
{
    /**
     * @description The authentication algorithm that is used in IPsec Phase 2 negotiations.
     *
     *   Valid values when the IPsec connection is attached to a standard VPN gateway: **md5**, **sha1**, **sha256**, **sha384**, and **sha512**.
     *   Valid values when the IPsec connection is attached to a VPN gateway that uses an SM certificate: **sm3**.
     *
     * @example sha1
     *
     * @var string
     */
    public $ipsecAuthAlg;

    /**
     * @description The encryption algorithm that is used in IPsec Phase 2 negotiations.
     *
     *   Valid values when the IPsec connection is attached to a standard VPN gateway: **aes**, **aes192**, **sha256**, **des**, and **3des**.
     *   Valid values when the IPsec connection is attached to a VPN gateway that uses an SM certificate: **sm4**.
     *
     * @example aes
     *
     * @var string
     */
    public $ipsecEncAlg;

    /**
     * @description The SA lifetime that is used in IPsec Phase 2 negotiations. Unit: seconds. Valid values: **0 to 86400**.
     *
     * @example 86400
     *
     * @var int
     */
    public $ipsecLifetime;

    /**
     * @description The DH key exchange algorithm that is used in IPsec Phase 2 negotiations. Valid values: **disabled**, **group1**, **group2**, **group5**, and **group14**.
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
