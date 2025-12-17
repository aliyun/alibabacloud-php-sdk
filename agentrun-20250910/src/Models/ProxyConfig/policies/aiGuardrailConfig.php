<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\ProxyConfig\policies;

use AlibabaCloud\Dara\Model;

class aiGuardrailConfig extends Model
{
    /**
     * @var bool
     */
    public $blockOnContentModeration;

    /**
     * @var bool
     */
    public $blockOnMaliciousUrl;

    /**
     * @var bool
     */
    public $blockOnModelHallucination;

    /**
     * @var bool
     */
    public $blockOnPromptAttack;

    /**
     * @var bool
     */
    public $blockOnSensitiveData;

    /**
     * @var bool
     */
    public $checkRequest;

    /**
     * @var bool
     */
    public $checkResponse;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $maxTextLength;
    protected $_name = [
        'blockOnContentModeration' => 'blockOnContentModeration',
        'blockOnMaliciousUrl' => 'blockOnMaliciousUrl',
        'blockOnModelHallucination' => 'blockOnModelHallucination',
        'blockOnPromptAttack' => 'blockOnPromptAttack',
        'blockOnSensitiveData' => 'blockOnSensitiveData',
        'checkRequest' => 'checkRequest',
        'checkResponse' => 'checkResponse',
        'level' => 'level',
        'maxTextLength' => 'maxTextLength',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockOnContentModeration) {
            $res['blockOnContentModeration'] = $this->blockOnContentModeration;
        }

        if (null !== $this->blockOnMaliciousUrl) {
            $res['blockOnMaliciousUrl'] = $this->blockOnMaliciousUrl;
        }

        if (null !== $this->blockOnModelHallucination) {
            $res['blockOnModelHallucination'] = $this->blockOnModelHallucination;
        }

        if (null !== $this->blockOnPromptAttack) {
            $res['blockOnPromptAttack'] = $this->blockOnPromptAttack;
        }

        if (null !== $this->blockOnSensitiveData) {
            $res['blockOnSensitiveData'] = $this->blockOnSensitiveData;
        }

        if (null !== $this->checkRequest) {
            $res['checkRequest'] = $this->checkRequest;
        }

        if (null !== $this->checkResponse) {
            $res['checkResponse'] = $this->checkResponse;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->maxTextLength) {
            $res['maxTextLength'] = $this->maxTextLength;
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
        if (isset($map['blockOnContentModeration'])) {
            $model->blockOnContentModeration = $map['blockOnContentModeration'];
        }

        if (isset($map['blockOnMaliciousUrl'])) {
            $model->blockOnMaliciousUrl = $map['blockOnMaliciousUrl'];
        }

        if (isset($map['blockOnModelHallucination'])) {
            $model->blockOnModelHallucination = $map['blockOnModelHallucination'];
        }

        if (isset($map['blockOnPromptAttack'])) {
            $model->blockOnPromptAttack = $map['blockOnPromptAttack'];
        }

        if (isset($map['blockOnSensitiveData'])) {
            $model->blockOnSensitiveData = $map['blockOnSensitiveData'];
        }

        if (isset($map['checkRequest'])) {
            $model->checkRequest = $map['checkRequest'];
        }

        if (isset($map['checkResponse'])) {
            $model->checkResponse = $map['checkResponse'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['maxTextLength'])) {
            $model->maxTextLength = $map['maxTextLength'];
        }

        return $model;
    }
}
