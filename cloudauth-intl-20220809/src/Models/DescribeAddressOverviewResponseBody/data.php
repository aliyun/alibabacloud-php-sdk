<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\DescribeAddressOverviewResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 54.4216
     *
     * @var float
     */
    public $balance;

    /**
     * @example 1441800674
     *
     * @var int
     */
    public $firstSeen;

    /**
     * @example 1682056727
     *
     * @var int
     */
    public $lastSeen;

    /**
     * @example 1470
     *
     * @var int
     */
    public $receivedTxsCount;

    /**
     * @example 227
     *
     * @var int
     */
    public $spentTxsCount;

    /**
     * @example 916263.8
     *
     * @var float
     */
    public $totalReceived;

    /**
     * @example 916205.4
     *
     * @var float
     */
    public $totalSpent;

    /**
     * @example 1697
     *
     * @var int
     */
    public $txsCount;
    protected $_name = [
        'balance'          => 'Balance',
        'firstSeen'        => 'FirstSeen',
        'lastSeen'         => 'LastSeen',
        'receivedTxsCount' => 'ReceivedTxsCount',
        'spentTxsCount'    => 'SpentTxsCount',
        'totalReceived'    => 'TotalReceived',
        'totalSpent'       => 'TotalSpent',
        'txsCount'         => 'TxsCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->balance) {
            $res['Balance'] = $this->balance;
        }
        if (null !== $this->firstSeen) {
            $res['FirstSeen'] = $this->firstSeen;
        }
        if (null !== $this->lastSeen) {
            $res['LastSeen'] = $this->lastSeen;
        }
        if (null !== $this->receivedTxsCount) {
            $res['ReceivedTxsCount'] = $this->receivedTxsCount;
        }
        if (null !== $this->spentTxsCount) {
            $res['SpentTxsCount'] = $this->spentTxsCount;
        }
        if (null !== $this->totalReceived) {
            $res['TotalReceived'] = $this->totalReceived;
        }
        if (null !== $this->totalSpent) {
            $res['TotalSpent'] = $this->totalSpent;
        }
        if (null !== $this->txsCount) {
            $res['TxsCount'] = $this->txsCount;
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
        if (isset($map['Balance'])) {
            $model->balance = $map['Balance'];
        }
        if (isset($map['FirstSeen'])) {
            $model->firstSeen = $map['FirstSeen'];
        }
        if (isset($map['LastSeen'])) {
            $model->lastSeen = $map['LastSeen'];
        }
        if (isset($map['ReceivedTxsCount'])) {
            $model->receivedTxsCount = $map['ReceivedTxsCount'];
        }
        if (isset($map['SpentTxsCount'])) {
            $model->spentTxsCount = $map['SpentTxsCount'];
        }
        if (isset($map['TotalReceived'])) {
            $model->totalReceived = $map['TotalReceived'];
        }
        if (isset($map['TotalSpent'])) {
            $model->totalSpent = $map['TotalSpent'];
        }
        if (isset($map['TxsCount'])) {
            $model->txsCount = $map['TxsCount'];
        }

        return $model;
    }
}
