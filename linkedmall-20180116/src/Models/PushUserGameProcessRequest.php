<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class PushUserGameProcessRequest extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $currentStepId;

    /**
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @var mixed[]
     */
    public $body;
    protected $_name = [
        'accountType'      => 'AccountType',
        'bizId'            => 'BizId',
        'currentStepId'    => 'CurrentStepId',
        'processId'        => 'ProcessId',
        'thirdPartyUserId' => 'ThirdPartyUserId',
        'body'             => 'body',
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
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushUserGameProcessRequest
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
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
