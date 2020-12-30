<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponseBody;

use AlibabaCloud\Tea\Model;

class ipsecConfig extends Model
{
    /**
     * @var int
     */
    public $ipsecLifetime;

    /**
     * @var string
     */
    public $ipsecEncAlg;

    /**
     * @var string
     */
    public $ipsecPfs;

    /**
     * @var string
     */
    public $ipsecAuthAlg;
    protected $_name = [
        'ipsecLifetime' => 'IpsecLifetime',
        'ipsecEncAlg'   => 'IpsecEncAlg',
        'ipsecPfs'      => 'IpsecPfs',
        'ipsecAuthAlg'  => 'IpsecAuthAlg',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipsecLifetime) {
            $res['IpsecLifetime'] = $this->ipsecLifetime;
        }
        if (null !== $this->ipsecEncAlg) {
            $res['IpsecEncAlg'] = $this->ipsecEncAlg;
        }
        if (null !== $this->ipsecPfs) {
            $res['IpsecPfs'] = $this->ipsecPfs;
        }
        if (null !== $this->ipsecAuthAlg) {
            $res['IpsecAuthAlg'] = $this->ipsecAuthAlg;
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
        if (isset($map['IpsecLifetime'])) {
            $model->ipsecLifetime = $map['IpsecLifetime'];
        }
        if (isset($map['IpsecEncAlg'])) {
            $model->ipsecEncAlg = $map['IpsecEncAlg'];
        }
        if (isset($map['IpsecPfs'])) {
            $model->ipsecPfs = $map['IpsecPfs'];
        }
        if (isset($map['IpsecAuthAlg'])) {
            $model->ipsecAuthAlg = $map['IpsecAuthAlg'];
        }

        return $model;
    }
}
