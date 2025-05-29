<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitAIAgentVideoAuditTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $AIAgentId;

    /**
     * @var int
     */
    public $auditInterval;

    /**
     * @var string
     */
    public $callbackConfigShrink;

    /**
     * @var string
     */
    public $capturePoliciesShrink;

    /**
     * @var string
     */
    public $inputShrink;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'AIAgentId' => 'AIAgentId',
        'auditInterval' => 'AuditInterval',
        'callbackConfigShrink' => 'CallbackConfig',
        'capturePoliciesShrink' => 'CapturePolicies',
        'inputShrink' => 'Input',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIAgentId) {
            $res['AIAgentId'] = $this->AIAgentId;
        }

        if (null !== $this->auditInterval) {
            $res['AuditInterval'] = $this->auditInterval;
        }

        if (null !== $this->callbackConfigShrink) {
            $res['CallbackConfig'] = $this->callbackConfigShrink;
        }

        if (null !== $this->capturePoliciesShrink) {
            $res['CapturePolicies'] = $this->capturePoliciesShrink;
        }

        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['AIAgentId'])) {
            $model->AIAgentId = $map['AIAgentId'];
        }

        if (isset($map['AuditInterval'])) {
            $model->auditInterval = $map['AuditInterval'];
        }

        if (isset($map['CallbackConfig'])) {
            $model->callbackConfigShrink = $map['CallbackConfig'];
        }

        if (isset($map['CapturePolicies'])) {
            $model->capturePoliciesShrink = $map['CapturePolicies'];
        }

        if (isset($map['Input'])) {
            $model->inputShrink = $map['Input'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
