<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class GetFundAccountCanAllocateCreditAmountResponseBody extends Model
{
    /**
     * @example 2032123221
     *
     * @var string
     */
    public $ecid;

    /**
     * @example 300
     *
     * @var string
     */
    public $ecidAllocatedCreditAmount;

    /**
     * @example 1000
     *
     * @var string
     */
    public $ecidCreditAmount;

    /**
     * @example 202321232
     *
     * @var string
     */
    public $fundAccountEcid;

    /**
     * @example 12332112
     *
     * @var int
     */
    public $fundAccountId;

    /**
     * @example 云某的名称
     *
     * @var string
     */
    public $fundAccountName;

    /**
     * @example 123433121
     *
     * @var int
     */
    public $fundAccountOwnerAccountId;

    /**
     * @example 1500
     *
     * @var string
     */
    public $maxCanAllocateCreditAmount;

    /**
     * @example {}
     *
     * @var mixed
     */
    public $metadata;

    /**
     * @example 200
     *
     * @var string
     */
    public $minCanAllocateCreditAmount;

    /**
     * @example 2684210001
     *
     * @var string
     */
    public $nbid;

    /**
     * @example CC706AAC-75A6-55B5-9AB7-7D171C6C7655
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 26842
     *
     * @var string
     */
    public $site;
    protected $_name = [
        'ecid' => 'Ecid',
        'ecidAllocatedCreditAmount' => 'EcidAllocatedCreditAmount',
        'ecidCreditAmount' => 'EcidCreditAmount',
        'fundAccountEcid' => 'FundAccountEcid',
        'fundAccountId' => 'FundAccountId',
        'fundAccountName' => 'FundAccountName',
        'fundAccountOwnerAccountId' => 'FundAccountOwnerAccountId',
        'maxCanAllocateCreditAmount' => 'MaxCanAllocateCreditAmount',
        'metadata' => 'Metadata',
        'minCanAllocateCreditAmount' => 'MinCanAllocateCreditAmount',
        'nbid' => 'Nbid',
        'requestId' => 'RequestId',
        'site' => 'Site',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecid) {
            $res['Ecid'] = $this->ecid;
        }
        if (null !== $this->ecidAllocatedCreditAmount) {
            $res['EcidAllocatedCreditAmount'] = $this->ecidAllocatedCreditAmount;
        }
        if (null !== $this->ecidCreditAmount) {
            $res['EcidCreditAmount'] = $this->ecidCreditAmount;
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
        if (null !== $this->maxCanAllocateCreditAmount) {
            $res['MaxCanAllocateCreditAmount'] = $this->maxCanAllocateCreditAmount;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->minCanAllocateCreditAmount) {
            $res['MinCanAllocateCreditAmount'] = $this->minCanAllocateCreditAmount;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFundAccountCanAllocateCreditAmountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ecid'])) {
            $model->ecid = $map['Ecid'];
        }
        if (isset($map['EcidAllocatedCreditAmount'])) {
            $model->ecidAllocatedCreditAmount = $map['EcidAllocatedCreditAmount'];
        }
        if (isset($map['EcidCreditAmount'])) {
            $model->ecidCreditAmount = $map['EcidCreditAmount'];
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
        if (isset($map['MaxCanAllocateCreditAmount'])) {
            $model->maxCanAllocateCreditAmount = $map['MaxCanAllocateCreditAmount'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['MinCanAllocateCreditAmount'])) {
            $model->minCanAllocateCreditAmount = $map['MinCanAllocateCreditAmount'];
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

        return $model;
    }
}
