<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class RefundUserPointRequest extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @description 数额
     *
     * @var int
     */
    public $amount;

    /**
     * @description 业务ID
     *
     * @var string
     */
    public $bizId;

    /**
     * @description 扩展信息
     *
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @description 幂等ID
     *
     * @var string
     */
    public $idempotentId;

    /**
     * @description 发放说明
     *
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $originRecordId;

    /**
     * @description 规则ID
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description 业务方用户ID
     *
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @description 发放主题
     *
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
        'originRecordId'   => 'OriginRecordId',
        'ruleId'           => 'RuleId',
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
        if (null !== $this->originRecordId) {
            $res['OriginRecordId'] = $this->originRecordId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
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
     * @return RefundUserPointRequest
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
        if (isset($map['OriginRecordId'])) {
            $model->originRecordId = $map['OriginRecordId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
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
