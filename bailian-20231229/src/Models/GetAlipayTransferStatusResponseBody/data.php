<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\GetAlipayTransferStatusResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $alipayOrderDetail;

    /**
     * @var string
     */
    public $alipayOrderId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $mainAccountId;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $qrURL;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $transAmount;

    /**
     * @var string
     */
    public $walletItemCode;
    protected $_name = [
        'accountId' => 'accountId',
        'alipayOrderDetail' => 'alipayOrderDetail',
        'alipayOrderId' => 'alipayOrderId',
        'code' => 'code',
        'creator' => 'creator',
        'mainAccountId' => 'mainAccountId',
        'modifier' => 'modifier',
        'qrURL' => 'qrURL',
        'scope' => 'scope',
        'status' => 'status',
        'title' => 'title',
        'transAmount' => 'transAmount',
        'walletItemCode' => 'walletItemCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->alipayOrderDetail) {
            $res['alipayOrderDetail'] = $this->alipayOrderDetail;
        }

        if (null !== $this->alipayOrderId) {
            $res['alipayOrderId'] = $this->alipayOrderId;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->mainAccountId) {
            $res['mainAccountId'] = $this->mainAccountId;
        }

        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }

        if (null !== $this->qrURL) {
            $res['qrURL'] = $this->qrURL;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->transAmount) {
            $res['transAmount'] = $this->transAmount;
        }

        if (null !== $this->walletItemCode) {
            $res['walletItemCode'] = $this->walletItemCode;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['alipayOrderDetail'])) {
            $model->alipayOrderDetail = $map['alipayOrderDetail'];
        }

        if (isset($map['alipayOrderId'])) {
            $model->alipayOrderId = $map['alipayOrderId'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['mainAccountId'])) {
            $model->mainAccountId = $map['mainAccountId'];
        }

        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }

        if (isset($map['qrURL'])) {
            $model->qrURL = $map['qrURL'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['transAmount'])) {
            $model->transAmount = $map['transAmount'];
        }

        if (isset($map['walletItemCode'])) {
            $model->walletItemCode = $map['walletItemCode'];
        }

        return $model;
    }
}
