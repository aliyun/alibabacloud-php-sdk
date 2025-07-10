<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class LlmSmartCallShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationCode;

    /**
     * @var string
     */
    public $bizParamShrink;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $callerNumber;

    /**
     * @var string
     */
    public $customerLineCode;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var string
     */
    public $promptParamShrink;

    /**
     * @var int
     */
    public $sessionTimeout;

    /**
     * @var string
     */
    public $startWordParamShrink;

    /**
     * @var int
     */
    public $ttsSpeed;

    /**
     * @var string
     */
    public $ttsVoiceCode;

    /**
     * @var int
     */
    public $ttsVolume;
    protected $_name = [
        'applicationCode' => 'ApplicationCode',
        'bizParamShrink' => 'BizParam',
        'calledNumber' => 'CalledNumber',
        'callerNumber' => 'CallerNumber',
        'customerLineCode' => 'CustomerLineCode',
        'extension' => 'Extension',
        'outId' => 'OutId',
        'promptParamShrink' => 'PromptParam',
        'sessionTimeout' => 'SessionTimeout',
        'startWordParamShrink' => 'StartWordParam',
        'ttsSpeed' => 'TtsSpeed',
        'ttsVoiceCode' => 'TtsVoiceCode',
        'ttsVolume' => 'TtsVolume',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCode) {
            $res['ApplicationCode'] = $this->applicationCode;
        }

        if (null !== $this->bizParamShrink) {
            $res['BizParam'] = $this->bizParamShrink;
        }

        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }

        if (null !== $this->customerLineCode) {
            $res['CustomerLineCode'] = $this->customerLineCode;
        }

        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        if (null !== $this->promptParamShrink) {
            $res['PromptParam'] = $this->promptParamShrink;
        }

        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }

        if (null !== $this->startWordParamShrink) {
            $res['StartWordParam'] = $this->startWordParamShrink;
        }

        if (null !== $this->ttsSpeed) {
            $res['TtsSpeed'] = $this->ttsSpeed;
        }

        if (null !== $this->ttsVoiceCode) {
            $res['TtsVoiceCode'] = $this->ttsVoiceCode;
        }

        if (null !== $this->ttsVolume) {
            $res['TtsVolume'] = $this->ttsVolume;
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
        if (isset($map['ApplicationCode'])) {
            $model->applicationCode = $map['ApplicationCode'];
        }

        if (isset($map['BizParam'])) {
            $model->bizParamShrink = $map['BizParam'];
        }

        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }

        if (isset($map['CustomerLineCode'])) {
            $model->customerLineCode = $map['CustomerLineCode'];
        }

        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        if (isset($map['PromptParam'])) {
            $model->promptParamShrink = $map['PromptParam'];
        }

        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }

        if (isset($map['StartWordParam'])) {
            $model->startWordParamShrink = $map['StartWordParam'];
        }

        if (isset($map['TtsSpeed'])) {
            $model->ttsSpeed = $map['TtsSpeed'];
        }

        if (isset($map['TtsVoiceCode'])) {
            $model->ttsVoiceCode = $map['TtsVoiceCode'];
        }

        if (isset($map['TtsVolume'])) {
            $model->ttsVolume = $map['TtsVolume'];
        }

        return $model;
    }
}
