<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QuerySellerLicenseResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example https://alibaba.com/seller/****\/license
     *
     * @var string
     */
    public $licenseUrl;

    /**
     * @example 221410922****
     *
     * @var string
     */
    public $sellerId;
    protected $_name = [
        'licenseUrl' => 'LicenseUrl',
        'sellerId'   => 'SellerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->licenseUrl) {
            $res['LicenseUrl'] = $this->licenseUrl;
        }
        if (null !== $this->sellerId) {
            $res['SellerId'] = $this->sellerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LicenseUrl'])) {
            $model->licenseUrl = $map['LicenseUrl'];
        }
        if (isset($map['SellerId'])) {
            $model->sellerId = $map['SellerId'];
        }

        return $model;
    }
}
