<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeMaliciousAddressResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2017-07-18 00:00:00
     *
     * @var string
     */
    public $addTime;

    /**
     * @example f6d239ff***df816
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
     * @example FAKE_Coindash_2
     *
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'addTime' => 'AddTime',
        'address' => 'Address',
        'coin'    => 'Coin',
        'detail'  => 'Detail',
        'tag'     => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->coin) {
            $res['Coin'] = $this->coin;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Coin'])) {
            $model->coin = $map['Coin'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
