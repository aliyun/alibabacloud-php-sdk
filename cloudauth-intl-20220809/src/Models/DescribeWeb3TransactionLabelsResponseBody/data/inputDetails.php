<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeWeb3TransactionLabelsResponseBody\data;

use AlibabaCloud\Tea\Model;

class inputDetails extends Model
{
    /**
     * @description example: 15. the amount of transation sent by the address
     *
     * @example 3234
     *
     * @var int
     */
    public $amount;

    /**
     * @description the address hash
     *
     * @example 21a31Ee1afC51d94C2eFcCAa2xxxxxx
     *
     * @var string
     */
    public $inputHash;

    /**
     * @description example: true. is it a contract
     *
     * @example true
     *
     * @var string
     */
    public $isContract;

    /**
     * @description example: Dex . the tag of the address
     *
     * @example contracts:Tether: Tether_USD,token_standard:xxxxxx
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'amount'     => 'Amount',
        'inputHash'  => 'InputHash',
        'isContract' => 'IsContract',
        'tag'        => 'Tag',
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
        if (null !== $this->inputHash) {
            $res['InputHash'] = $this->inputHash;
        }
        if (null !== $this->isContract) {
            $res['IsContract'] = $this->isContract;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['InputHash'])) {
            $model->inputHash = $map['InputHash'];
        }
        if (isset($map['IsContract'])) {
            $model->isContract = $map['IsContract'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
