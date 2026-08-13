<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GetUserCreditUsageResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $creditLimit;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $remainingCredits;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $shadowCreditLimit;

    /**
     * @var string
     */
    public $shadowRemainingCredits;

    /**
     * @var string
     */
    public $shadowUsedCredits;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $usedCredits;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'code' => 'code',
        'creditLimit' => 'creditLimit',
        'message' => 'message',
        'remainingCredits' => 'remainingCredits',
        'requestId' => 'requestId',
        'shadowCreditLimit' => 'shadowCreditLimit',
        'shadowRemainingCredits' => 'shadowRemainingCredits',
        'shadowUsedCredits' => 'shadowUsedCredits',
        'tenantId' => 'tenantId',
        'usedCredits' => 'usedCredits',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->creditLimit) {
            $res['creditLimit'] = $this->creditLimit;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->remainingCredits) {
            $res['remainingCredits'] = $this->remainingCredits;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->shadowCreditLimit) {
            $res['shadowCreditLimit'] = $this->shadowCreditLimit;
        }

        if (null !== $this->shadowRemainingCredits) {
            $res['shadowRemainingCredits'] = $this->shadowRemainingCredits;
        }

        if (null !== $this->shadowUsedCredits) {
            $res['shadowUsedCredits'] = $this->shadowUsedCredits;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->usedCredits) {
            $res['usedCredits'] = $this->usedCredits;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['creditLimit'])) {
            $model->creditLimit = $map['creditLimit'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['remainingCredits'])) {
            $model->remainingCredits = $map['remainingCredits'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['shadowCreditLimit'])) {
            $model->shadowCreditLimit = $map['shadowCreditLimit'];
        }

        if (isset($map['shadowRemainingCredits'])) {
            $model->shadowRemainingCredits = $map['shadowRemainingCredits'];
        }

        if (isset($map['shadowUsedCredits'])) {
            $model->shadowUsedCredits = $map['shadowUsedCredits'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['usedCredits'])) {
            $model->usedCredits = $map['usedCredits'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
