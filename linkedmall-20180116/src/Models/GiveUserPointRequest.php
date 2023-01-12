<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class GiveUserPointRequest extends Model
{
    /**
     * @example ANONY
     *
     * @var string
     */
    public $accountType;

    /**
     * @example 1000
     *
     * @var int
     */
    public $amount;

    /**
     * @example LMALL20******01
     *
     * @var string
     */
    public $bizId;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @example 20211212******1746-1202
     *
     * @var string
     */
    public $idempotentId;

    /**
     * @var string
     */
    public $message;

    /**
     * @example 136
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example 22******45
     *
     * @var string
     */
    public $targetBizUid;

    /**
     * @example 22******67
     *
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'accountType'      => 'AccountType',
        'amount'           => 'Amount',
        'bizId'            => 'BizId',
        'extInfo'          => 'ExtInfo',
        'idempotentId'     => 'IdempotentId',
        'message'          => 'Message',
        'ruleId'           => 'RuleId',
        'targetBizUid'     => 'TargetBizUid',
        'thirdPartyUserId' => 'ThirdPartyUserId',
        'title'            => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->idempotentId) {
            $res['IdempotentId'] = $this->idempotentId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->targetBizUid) {
            $res['TargetBizUid'] = $this->targetBizUid;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GiveUserPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['IdempotentId'])) {
            $model->idempotentId = $map['IdempotentId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['TargetBizUid'])) {
            $model->targetBizUid = $map['TargetBizUid'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
