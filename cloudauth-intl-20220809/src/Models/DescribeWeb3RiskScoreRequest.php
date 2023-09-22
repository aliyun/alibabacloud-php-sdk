<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models;

use AlibabaCloud\Tea\Model;

class DescribeWeb3RiskScoreRequest extends Model
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
     * @description minimum: 1
     * For account-based blockchains, default and maximum is enforced at 6
     * @example 2
     *
     * @var int
     */
    public $depth;

    /**
     * @description A unique business ID for tracing purpose. For example，the sequence ID from the merchant\"s business-related database.
     *
     * @example e0c34a353888
     *
     * @var string
     */
    public $merchantBizId;

    /**
     * @description For TRANSACTION objects, you need to provide the transaction hash。
     * For ADDRESS objects, you need to provide the address or reference address hash。
     * @example 0000980145045a5c5acad3d2df0cf3b2afxxxxxx
     *
     * @var string
     */
    public $objectId;

    /**
     * @description The object of the analysis.
     * [ TRANSACTION, ADDRESS ]
     * @example TRANSACTION
     *
     * @var string
     */
    public $objectType;
    protected $_name = [
        'chainShortName' => 'ChainShortName',
        'depth'          => 'Depth',
        'merchantBizId'  => 'MerchantBizId',
        'objectId'       => 'ObjectId',
        'objectType'     => 'ObjectType',
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
        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }
        if (null !== $this->merchantBizId) {
            $res['MerchantBizId'] = $this->merchantBizId;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWeb3RiskScoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainShortName'])) {
            $model->chainShortName = $map['ChainShortName'];
        }
        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }
        if (isset($map['MerchantBizId'])) {
            $model->merchantBizId = $map['MerchantBizId'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        return $model;
    }
}
