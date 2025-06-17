<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAIAgentVideoAuditTaskRequest\callbackConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAIAgentVideoAuditTaskRequest\capturePolicies;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAIAgentVideoAuditTaskRequest\input;

class SubmitAIAgentVideoAuditTaskRequest extends Model
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
     * @var callbackConfig
     */
    public $callbackConfig;

    /**
     * @var capturePolicies[]
     */
    public $capturePolicies;

    /**
     * @var input
     */
    public $input;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'AIAgentId' => 'AIAgentId',
        'auditInterval' => 'AuditInterval',
        'callbackConfig' => 'CallbackConfig',
        'capturePolicies' => 'CapturePolicies',
        'input' => 'Input',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->callbackConfig) {
            $this->callbackConfig->validate();
        }
        if (\is_array($this->capturePolicies)) {
            Model::validateArray($this->capturePolicies);
        }
        if (null !== $this->input) {
            $this->input->validate();
        }
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

        if (null !== $this->callbackConfig) {
            $res['CallbackConfig'] = null !== $this->callbackConfig ? $this->callbackConfig->toArray($noStream) : $this->callbackConfig;
        }

        if (null !== $this->capturePolicies) {
            if (\is_array($this->capturePolicies)) {
                $res['CapturePolicies'] = [];
                $n1 = 0;
                foreach ($this->capturePolicies as $item1) {
                    $res['CapturePolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
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
            $model->callbackConfig = callbackConfig::fromMap($map['CallbackConfig']);
        }

        if (isset($map['CapturePolicies'])) {
            if (!empty($map['CapturePolicies'])) {
                $model->capturePolicies = [];
                $n1 = 0;
                foreach ($map['CapturePolicies'] as $item1) {
                    $model->capturePolicies[$n1] = capturePolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
