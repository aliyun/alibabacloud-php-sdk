<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class GetFundAccountCanAllocateCreditAmountResponseBody extends Model
{
    /**
     * @var string
     */
    public $ecid;
    /**
     * @var string
     */
    public $ecidAllocatedCreditAmount;
    /**
     * @var string
     */
    public $ecidCreditAmount;
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
    public $maxCanAllocateCreditAmount;
    /**
     * @var mixed
     */
    public $metadata;
    /**
     * @var string
     */
    public $minCanAllocateCreditAmount;
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
    protected $_name = [
        'ecid'                       => 'Ecid',
        'ecidAllocatedCreditAmount'  => 'EcidAllocatedCreditAmount',
        'ecidCreditAmount'           => 'EcidCreditAmount',
        'fundAccountEcid'            => 'FundAccountEcid',
        'fundAccountId'              => 'FundAccountId',
        'fundAccountName'            => 'FundAccountName',
        'fundAccountOwnerAccountId'  => 'FundAccountOwnerAccountId',
        'maxCanAllocateCreditAmount' => 'MaxCanAllocateCreditAmount',
        'metadata'                   => 'Metadata',
        'minCanAllocateCreditAmount' => 'MinCanAllocateCreditAmount',
        'nbid'                       => 'Nbid',
        'requestId'                  => 'RequestId',
        'site'                       => 'Site',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
