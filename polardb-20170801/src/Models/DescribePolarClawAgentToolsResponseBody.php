<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawAgentToolsResponseBody\currentConfig;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawAgentToolsResponseBody\groups;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawAgentToolsResponseBody\profiles;

class DescribePolarClawAgentToolsResponseBody extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var currentConfig
     */
    public $currentConfig;

    /**
     * @var groups[]
     */
    public $groups;

    /**
     * @var string
     */
    public $message;

    /**
     * @var profiles[]
     */
    public $profiles;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'agentId' => 'AgentId',
        'applicationId' => 'ApplicationId',
        'code' => 'Code',
        'currentConfig' => 'CurrentConfig',
        'groups' => 'Groups',
        'message' => 'Message',
        'profiles' => 'Profiles',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->currentConfig) {
            $this->currentConfig->validate();
        }
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
        }
        if (\is_array($this->profiles)) {
            Model::validateArray($this->profiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->currentConfig) {
            $res['CurrentConfig'] = null !== $this->currentConfig ? $this->currentConfig->toArray($noStream) : $this->currentConfig;
        }

        if (null !== $this->groups) {
            if (\is_array($this->groups)) {
                $res['Groups'] = [];
                $n1 = 0;
                foreach ($this->groups as $item1) {
                    $res['Groups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->profiles) {
            if (\is_array($this->profiles)) {
                $res['Profiles'] = [];
                $n1 = 0;
                foreach ($this->profiles as $item1) {
                    $res['Profiles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CurrentConfig'])) {
            $model->currentConfig = currentConfig::fromMap($map['CurrentConfig']);
        }

        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = [];
                $n1 = 0;
                foreach ($map['Groups'] as $item1) {
                    $model->groups[$n1] = groups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Profiles'])) {
            if (!empty($map['Profiles'])) {
                $model->profiles = [];
                $n1 = 0;
                foreach ($map['Profiles'] as $item1) {
                    $model->profiles[$n1] = profiles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
