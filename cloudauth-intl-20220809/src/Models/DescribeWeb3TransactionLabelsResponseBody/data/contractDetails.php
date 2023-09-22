<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeWeb3TransactionLabelsResponseBody\data;

use AlibabaCloud\Tea\Model;

class contractDetails extends Model
{
    /**
     * @description the value of internal transaction
     *
     * @example 945.5
     *
     * @var string
     */
    public $amount;

    /**
     * @description the sender of internal transaction
     *
     * @example C7019579cB9bdb9204e61C7179ba2F88F9dxxxxxx
     *
     * @var string
     */
    public $from;

    /**
     * @description the gaslimit of internal transaction
     *
     * @example 20712
     *
     * @var int
     */
    public $gasLimit;

    /**
     * @description the call layer of internal transaction
     *
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @description the receiver of internal transaction
     *
     * @example C7019579cB9bdb9204e61C7179ba2F88F9dxxxxxx
     *
     * @var string
     */
    public $to;
    protected $_name = [
        'amount'   => 'Amount',
        'from'     => 'From',
        'gasLimit' => 'GasLimit',
        'index'    => 'Index',
        'to'       => 'To',
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
        if (null !== $this->gasLimit) {
            $res['GasLimit'] = $this->gasLimit;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contractDetails
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
        if (isset($map['GasLimit'])) {
            $model->gasLimit = $map['GasLimit'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
