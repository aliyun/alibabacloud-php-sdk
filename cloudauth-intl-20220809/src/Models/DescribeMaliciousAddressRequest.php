<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class DescribeMaliciousAddressRequest extends Model
{
    /**
     * @example BTC
     *
     * @var string
     */
    public $coin;

    /**
     * @example 2017-08-20
     *
     * @var string
     */
    public $end;

    /**
     * @example djs20dsjk2-dsjd29-dsskc
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @example 2017-07-20
     *
     * @var string
     */
    public $start;
    protected $_name = [
        'coin'          => 'Coin',
        'end'           => 'End',
        'merchantBizId' => 'MerchantBizId',
        'start'         => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coin) {
            $res['Coin'] = $this->coin;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMaliciousAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Coin'])) {
            $model->coin = $map['Coin'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
