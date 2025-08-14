<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class GetFundAccountCanTransferAmountResponseBody extends Model
{
    /**
     * @var string
     */
    public $availableAmount;

    /**
     * @var string
     */
    public $cashAmount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $fundAccountEcid;

    /**
     * @var int
     */
    public $fundAccountId;

    /**
     * @var string
     */
    public $fundAccountName;

    /**
     * @var int
     */
    public $fundAccountOwnerAccountId;

    /**
     * @var string
     */
    public $maxTransferableAmount;

    /**
     * @var mixed
     */
    public $metadata;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $site;

    /**
     * @var string
     */
    public $transferAmount;
    protected $_name = [
        'availableAmount' => 'AvailableAmount',
        'cashAmount' => 'CashAmount',
        'currency' => 'Currency',
        'fundAccountEcid' => 'FundAccountEcid',
        'fundAccountId' => 'FundAccountId',
        'fundAccountName' => 'FundAccountName',
        'fundAccountOwnerAccountId' => 'FundAccountOwnerAccountId',
        'maxTransferableAmount' => 'MaxTransferableAmount',
        'metadata' => 'Metadata',
        'nbid' => 'Nbid',
        'requestId' => 'RequestId',
        'site' => 'Site',
        'transferAmount' => 'TransferAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableAmount) {
            $res['AvailableAmount'] = $this->availableAmount;
        }

        if (null !== $this->cashAmount) {
            $res['CashAmount'] = $this->cashAmount;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->fundAccountEcid) {
            $res['FundAccountEcid'] = $this->fundAccountEcid;
        }

        if (null !== $this->fundAccountId) {
            $res['FundAccountId'] = $this->fundAccountId;
        }

        if (null !== $this->fundAccountName) {
            $res['FundAccountName'] = $this->fundAccountName;
        }

        if (null !== $this->fundAccountOwnerAccountId) {
            $res['FundAccountOwnerAccountId'] = $this->fundAccountOwnerAccountId;
        }

        if (null !== $this->maxTransferableAmount) {
            $res['MaxTransferableAmount'] = $this->maxTransferableAmount;
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->site) {
            $res['Site'] = $this->site;
        }

        if (null !== $this->transferAmount) {
            $res['TransferAmount'] = $this->transferAmount;
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
        if (isset($map['AvailableAmount'])) {
            $model->availableAmount = $map['AvailableAmount'];
        }

        if (isset($map['CashAmount'])) {
            $model->cashAmount = $map['CashAmount'];
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['FundAccountEcid'])) {
            $model->fundAccountEcid = $map['FundAccountEcid'];
        }

        if (isset($map['FundAccountId'])) {
            $model->fundAccountId = $map['FundAccountId'];
        }

        if (isset($map['FundAccountName'])) {
            $model->fundAccountName = $map['FundAccountName'];
        }

        if (isset($map['FundAccountOwnerAccountId'])) {
            $model->fundAccountOwnerAccountId = $map['FundAccountOwnerAccountId'];
        }

        if (isset($map['MaxTransferableAmount'])) {
            $model->maxTransferableAmount = $map['MaxTransferableAmount'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }

        if (isset($map['TransferAmount'])) {
            $model->transferAmount = $map['TransferAmount'];
        }

        return $model;
    }
}
