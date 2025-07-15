<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListIpsecServersResponseBody\ipsecServers;

use AlibabaCloud\Tea\Model;

class ipsecConfig extends Model
{
    /**
     * @description The IPsec authentication algorithm.
     *
     * @example sha1
     *
     * @var string
     */
    public $ipsecAuthAlg;

    /**
     * @description The IPsec encryption algorithm.
     *
     * @example aes
     *
     * @var string
     */
    public $ipsecEncAlg;

    /**
     * @description The IPsec lifetime. Unit: seconds.
     *
     * @example 86400
     *
     * @var int
     */
    public $ipsecLifetime;

    /**
     * @description The Diffie-Hellman key exchange algorithm.
     *
     * @example group2
     *
     * @var string
     */
    public $ipsecPfs;
    protected $_name = [
        'ipsecAuthAlg' => 'IpsecAuthAlg',
        'ipsecEncAlg' => 'IpsecEncAlg',
        'ipsecLifetime' => 'IpsecLifetime',
        'ipsecPfs' => 'IpsecPfs',
    ];

    public function validate() {}

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
     * @return ipsecConfig
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
