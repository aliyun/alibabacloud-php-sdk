<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\Tea\Model;

class DuplexDecisionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $bizRequestId;

    /**
     * @var int
     */
    public $callTime;

    /**
     * @var string
     */
    public $customKeywordsShrink;

    /**
     * @var string
     */
    public $dialogContextShrink;

    /**
     * @var string
     */
    public $dialogStatus;

    /**
     * @var int
     */
    public $interruptType;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'appId'                => 'AppId',
        'bizRequestId'         => 'BizRequestId',
        'callTime'             => 'CallTime',
        'customKeywordsShrink' => 'CustomKeywords',
        'dialogContextShrink'  => 'DialogContext',
        'dialogStatus'         => 'DialogStatus',
        'interruptType'        => 'InterruptType',
        'sessionId'            => 'SessionId',
        'tenantId'             => 'TenantId',
        'text'                 => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->bizRequestId) {
            $res['BizRequestId'] = $this->bizRequestId;
        }
        if (null !== $this->callTime) {
            $res['CallTime'] = $this->callTime;
        }
        if (null !== $this->customKeywordsShrink) {
            $res['CustomKeywords'] = $this->customKeywordsShrink;
        }
        if (null !== $this->dialogContextShrink) {
            $res['DialogContext'] = $this->dialogContextShrink;
        }
        if (null !== $this->dialogStatus) {
            $res['DialogStatus'] = $this->dialogStatus;
        }
        if (null !== $this->interruptType) {
            $res['InterruptType'] = $this->interruptType;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DuplexDecisionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BizRequestId'])) {
            $model->bizRequestId = $map['BizRequestId'];
        }
        if (isset($map['CallTime'])) {
            $model->callTime = $map['CallTime'];
        }
        if (isset($map['CustomKeywords'])) {
            $model->customKeywordsShrink = $map['CustomKeywords'];
        }
        if (isset($map['DialogContext'])) {
            $model->dialogContextShrink = $map['DialogContext'];
        }
        if (isset($map['DialogStatus'])) {
            $model->dialogStatus = $map['DialogStatus'];
        }
        if (isset($map['InterruptType'])) {
            $model->interruptType = $map['InterruptType'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
