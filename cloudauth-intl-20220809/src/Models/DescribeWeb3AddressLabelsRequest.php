<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class DescribeWeb3AddressLabelsRequest extends Model
{
    /**
     * @description The address hash.
     *
     * @example 0000980145045a5c5acad3d2df0cf3b2afxxxxxx
     *
     * @var string
     */
    public $address;

    /**
     * @description This is the short name of blockchain。
     * [ ETH, MATIC, BNB ]
     * @example ETH
     *
     * @var string
     */
    public $chainShortName;

    /**
     * @description A unique business ID for tracing purpose. For example，the sequence ID from the merchant\\"s business-related database.
     *
     * @example dso932dsjsd22
     *
     * @var string
     */
    public $merchantBizId;
    protected $_name = [
        'address'        => 'Address',
        'chainShortName' => 'ChainShortName',
        'merchantBizId'  => 'MerchantBizId',
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
        if (null !== $this->chainShortName) {
            $res['ChainShortName'] = $this->chainShortName;
        }
        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWeb3AddressLabelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['ChainShortName'])) {
            $model->chainShortName = $map['ChainShortName'];
        }
        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }

        return $model;
    }
}
