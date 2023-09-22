<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeWeb3TransactionLabelsResponseBody\data;

use AlibabaCloud\Tea\Model;

class tokenTransferDetails extends Model
{
    /**
     * @description the token amount
     *
     * @example 945.5
     *
     * @var string
     */
    public $amount;

    /**
     * @description the sender of the token
     *
     * @example 21a31Ee1afC51d94C2eFcCAa2092aD1028xxxxxx
     *
     * @var string
     */
    public $from;

    /**
     * @description the call layer of to token transfer
     *
     * @example 0
     *
     * @var int
     */
    public $index;

    /**
     * @description the token symbol
     *
     * @example USDT
     *
     * @var string
     */
    public $symbol;

    /**
     * @description the receiver of the token
     *
     * @example C7019579cB9bdb9204e61C7179ba2F88F9dxxxxxx
     *
     * @var string
     */
    public $to;

    /**
     * @description the token name
     *
     * @example Tether USD
     *
     * @var string
     */
    public $token;

    /**
     * @description the token address
     *
     * @example dAC17F958D2ee523a2206206994597C13Dxxxxxx
     *
     * @var string
     */
    public $tokenContractAddress;

    /**
     * @description NFT ID, if the token is erc721
     *
     * @example -1
     *
     * @var string
     */
    public $tokenId;
    protected $_name = [
        'amount'               => 'Amount',
        'from'                 => 'From',
        'index'                => 'Index',
        'symbol'               => 'Symbol',
        'to'                   => 'To',
        'token'                => 'Token',
        'tokenContractAddress' => 'TokenContractAddress',
        'tokenId'              => 'TokenId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->symbol) {
            $res['Symbol'] = $this->symbol;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->tokenContractAddress) {
            $res['TokenContractAddress'] = $this->tokenContractAddress;
        }
        if (null !== $this->tokenId) {
            $res['TokenId'] = $this->tokenId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tokenTransferDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Symbol'])) {
            $model->symbol = $map['Symbol'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['TokenContractAddress'])) {
            $model->tokenContractAddress = $map['TokenContractAddress'];
        }
        if (isset($map['TokenId'])) {
            $model->tokenId = $map['TokenId'];
        }

        return $model;
    }
}
