<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class DescribeWeb3TransactionLabelsRequest extends Model
{
    /**
     * @description This is the short name of blockchain。
     * [ ETH, MATIC, BNB ]
     * @example ETH
     *
     * @var string
     */
    public $chainShortName;

    /**
     * @description A unique business ID for tracing purpose. For example，the sequence ID from the merchant\"s business-related database.
     *
     * @example e0c34a353888
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @description The Transaction hash.
     *
     * @example c92880148d4896d8a2093a891a8f08916fe141fba474ede4101f81fb2bxxxxxx
     *
     * @var string
     */
    public $transaction;
    protected $_name = [
        'chainShortName' => 'ChainShortName',
        'merchantBizId'  => 'MerchantBizId',
        'transaction'    => 'Transaction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainShortName) {
            $res['ChainShortName'] = $this->chainShortName;
        }
        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }
        if (null !== $this->transaction) {
            $res['Transaction'] = $this->transaction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWeb3TransactionLabelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainShortName'])) {
            $model->chainShortName = $map['ChainShortName'];
        }
        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }
        if (isset($map['Transaction'])) {
            $model->transaction = $map['Transaction'];
        }

        return $model;
    }
}
