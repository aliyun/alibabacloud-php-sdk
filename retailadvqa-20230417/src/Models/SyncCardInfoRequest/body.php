<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models\SyncCardInfoRequest;

use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\SyncCardInfoRequest\body\gifters;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\SyncCardInfoRequest\body\presentDetail;
use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\SyncCardInfoRequest\body\recipient;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @example 1236437142867408
     *
     * @var string
     */
    public $buyerId;

    /**
     * @example ""
     *
     * @var string
     */
    public $extra;

    /**
     * @var gifters
     */
    public $gifters;

    /**
     * @example 2023-05-12 00:00:00
     *
     * @var string
     */
    public $occurredAt;

    /**
     * @example 750cff00c3e0996d220ac2861dafdfadsf
     *
     * @var string
     */
    public $openMerchantId;

    /**
     * @example 223332140970453
     *
     * @var string
     */
    public $orderId;

    /**
     * @var presentDetail[]
     */
    public $presentDetail;

    /**
     * @example 2023-05-12 00:00:00
     *
     * @var string
     */
    public $receivedAt;

    /**
     * @var recipient
     */
    public $recipient;

    /**
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $theme;

    /**
     * @example 3eecd2b8a6f946ca
     *
     * @var string
     */
    public $transferId;

    /**
     * @example 2023-05-12 00:00:00
     *
     * @var string
     */
    public $transferredAt;
    protected $_name = [
        'buyerId'        => 'BuyerId',
        'extra'          => 'Extra',
        'gifters'        => 'Gifters',
        'occurredAt'     => 'OccurredAt',
        'openMerchantId' => 'OpenMerchantId',
        'orderId'        => 'OrderId',
        'presentDetail'  => 'PresentDetail',
        'receivedAt'     => 'ReceivedAt',
        'recipient'      => 'Recipient',
        'status'         => 'Status',
        'theme'          => 'Theme',
        'transferId'     => 'TransferId',
        'transferredAt'  => 'TransferredAt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyerId) {
            $res['BuyerId'] = $this->buyerId;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->gifters) {
            $res['Gifters'] = null !== $this->gifters ? $this->gifters->toMap() : null;
        }
        if (null !== $this->occurredAt) {
            $res['OccurredAt'] = $this->occurredAt;
        }
        if (null !== $this->openMerchantId) {
            $res['OpenMerchantId'] = $this->openMerchantId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->presentDetail) {
            $res['PresentDetail'] = [];
            if (null !== $this->presentDetail && \is_array($this->presentDetail)) {
                $n = 0;
                foreach ($this->presentDetail as $item) {
                    $res['PresentDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->receivedAt) {
            $res['ReceivedAt'] = $this->receivedAt;
        }
        if (null !== $this->recipient) {
            $res['Recipient'] = null !== $this->recipient ? $this->recipient->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->theme) {
            $res['Theme'] = $this->theme;
        }
        if (null !== $this->transferId) {
            $res['TransferId'] = $this->transferId;
        }
        if (null !== $this->transferredAt) {
            $res['TransferredAt'] = $this->transferredAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyerId'])) {
            $model->buyerId = $map['BuyerId'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['Gifters'])) {
            $model->gifters = gifters::fromMap($map['Gifters']);
        }
        if (isset($map['OccurredAt'])) {
            $model->occurredAt = $map['OccurredAt'];
        }
        if (isset($map['OpenMerchantId'])) {
            $model->openMerchantId = $map['OpenMerchantId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PresentDetail'])) {
            if (!empty($map['PresentDetail'])) {
                $model->presentDetail = [];
                $n                    = 0;
                foreach ($map['PresentDetail'] as $item) {
                    $model->presentDetail[$n++] = null !== $item ? presentDetail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReceivedAt'])) {
            $model->receivedAt = $map['ReceivedAt'];
        }
        if (isset($map['Recipient'])) {
            $model->recipient = recipient::fromMap($map['Recipient']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Theme'])) {
            $model->theme = $map['Theme'];
        }
        if (isset($map['TransferId'])) {
            $model->transferId = $map['TransferId'];
        }
        if (isset($map['TransferredAt'])) {
            $model->transferredAt = $map['TransferredAt'];
        }

        return $model;
    }
}
