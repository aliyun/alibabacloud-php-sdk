<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeTransactionsListResponseBody\data;

use AlibabaCloud\Tea\Model;

class out extends Model
{
    /**
     * @example 0xd90e2***b90ad053324f31b
     *
     * @var string
     */
    public $address;

    /**
     * @example 743
     *
     * @var float
     */
    public $amount;

    /**
     * @example Tor***uter
     *
     * @var string
     */
    public $label;

    /**
     * @var string[]
     */
    public $txHashList;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'address'    => 'Address',
        'amount'     => 'Amount',
        'label'      => 'Label',
        'txHashList' => 'TxHashList',
        'type'       => 'Type',
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
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->txHashList) {
            $res['TxHashList'] = $this->txHashList;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return out
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['TxHashList'])) {
            if (!empty($map['TxHashList'])) {
                $model->txHashList = $map['TxHashList'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
