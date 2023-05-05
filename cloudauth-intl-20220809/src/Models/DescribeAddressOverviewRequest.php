<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class DescribeAddressOverviewRequest extends Model
{
    /**
     * @example 0xabds***djskjds
     *
     * @var string
     */
    public $address;

    /**
     * @example ETH
     *
     * @var string
     */
    public $coin;

    /**
     * @example e0c34a***353888
     *
     * @var string
     */
    public $merchantBizId;
    protected $_name = [
        'address'       => 'Address',
        'coin'          => 'Coin',
        'merchantBizId' => 'MerchantBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->coin) {
            $res['Coin'] = $this->coin;
        }
        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAddressOverviewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Coin'])) {
            $model->coin = $map['Coin'];
        }
        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }

        return $model;
    }
}
