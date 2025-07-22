<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ListFundAccountPayRelationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 32812132121
     *
     * @var string
     */
    public $accountId;

    /**
     * @example 云某的名称
     *
     * @var string
     */
    public $accountName;

    /**
     * @example 213231232
     *
     * @var string
     */
    public $ecid;

    /**
     * @example 2024-12-01 12:00:10
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @example 123231213
     *
     * @var string
     */
    public $fundAccountId;

    /**
     * @example 312328912
     *
     * @var string
     */
    public $fundAccountOwnerAccountId;

    /**
     * @example 2025-01-01 12:12:12
     *
     * @var string
     */
    public $ineffectiveTime;

    /**
     * @example 2684210001
     *
     * @var string
     */
    public $nbid;

    /**
     * @example 云某的名称
     *
     * @var string
     */
    public $operatorName;

    /**
     * @example 1232343423
     *
     * @var string
     */
    public $operatorNo;

    /**
     * @example aliyun_pk
     *
     * @var string
     */
    public $operatorType;

    /**
     * @example PAYMENT
     *
     * @var string
     */
    public $relationType;

    /**
     * @example 26842
     *
     * @var string
     */
    public $site;

    /**
     * @example valid
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'ecid' => 'Ecid',
        'effectiveTime' => 'EffectiveTime',
        'fundAccountId' => 'FundAccountId',
        'fundAccountOwnerAccountId' => 'FundAccountOwnerAccountId',
        'ineffectiveTime' => 'IneffectiveTime',
        'nbid' => 'Nbid',
        'operatorName' => 'OperatorName',
        'operatorNo' => 'OperatorNo',
        'operatorType' => 'OperatorType',
        'relationType' => 'RelationType',
        'site' => 'Site',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->ecid) {
            $res['Ecid'] = $this->ecid;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->fundAccountId) {
            $res['FundAccountId'] = $this->fundAccountId;
        }
        if (null !== $this->fundAccountOwnerAccountId) {
            $res['FundAccountOwnerAccountId'] = $this->fundAccountOwnerAccountId;
        }
        if (null !== $this->ineffectiveTime) {
            $res['IneffectiveTime'] = $this->ineffectiveTime;
        }
        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }
        if (null !== $this->operatorNo) {
            $res['OperatorNo'] = $this->operatorNo;
        }
        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }
        if (null !== $this->site) {
            $res['Site'] = $this->site;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['Ecid'])) {
            $model->ecid = $map['Ecid'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['FundAccountId'])) {
            $model->fundAccountId = $map['FundAccountId'];
        }
        if (isset($map['FundAccountOwnerAccountId'])) {
            $model->fundAccountOwnerAccountId = $map['FundAccountOwnerAccountId'];
        }
        if (isset($map['IneffectiveTime'])) {
            $model->ineffectiveTime = $map['IneffectiveTime'];
        }
        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }
        if (isset($map['OperatorNo'])) {
            $model->operatorNo = $map['OperatorNo'];
        }
        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }
        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
