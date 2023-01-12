<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class PushUserGameProcessShrinkRequest extends Model
{
    /**
     * @example ANONY
     *
     * @var string
     */
    public $accountType;

    /**
     * @example LMALL20******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example ""
     *
     * @var string
     */
    public $currentStepId;

    /**
     * @example {\"gmtCreate\":\"2022-01-01 00:00:00\"}
     *
     * @var string
     */
    public $extInfoShrink;

    /**
     * @example 6734******4397953
     *
     * @var string
     */
    public $processId;

    /**
     * @example 22******343
     *
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @example {\"orderNo\":\"20211204211241160338-120\",\"serialNumber\":\"0\",\"voucherId\":\"202112040007300238170AD22N26\",\"userId\":\"2088312906117381\"}
     *
     * @var string
     */
    public $bodyShrink;
    protected $_name = [
        'accountType'      => 'AccountType',
        'bizId'            => 'BizId',
        'currentStepId'    => 'CurrentStepId',
        'extInfoShrink'    => 'ExtInfo',
        'processId'        => 'ProcessId',
        'thirdPartyUserId' => 'ThirdPartyUserId',
        'bodyShrink'       => 'body',
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
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->currentStepId) {
            $res['CurrentStepId'] = $this->currentStepId;
        }
        if (null !== $this->extInfoShrink) {
            $res['ExtInfo'] = $this->extInfoShrink;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }
        if (null !== $this->bodyShrink) {
            $res['body'] = $this->bodyShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushUserGameProcessShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CurrentStepId'])) {
            $model->currentStepId = $map['CurrentStepId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfoShrink = $map['ExtInfo'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }
        if (isset($map['body'])) {
            $model->bodyShrink = $map['body'];
        }

        return $model;
    }
}
