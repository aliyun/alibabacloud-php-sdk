<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentRequest\applicationConfig\historyConfig;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentRequest\applicationConfig\longTermMemory;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentRequest\applicationConfig\parameters;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentRequest\applicationConfig\ragConfig;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentRequest\applicationConfig\security;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentRequest\applicationConfig\tools;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentRequest\applicationConfig\workFlows;

class applicationConfig extends Model
{
    /**
     * @var historyConfig
     */
    public $historyConfig;

    /**
     * @var longTermMemory
     */
    public $longTermMemory;

    /**
     * @var parameters
     */
    public $parameters;

    /**
     * @var ragConfig
     */
    public $ragConfig;

    /**
     * @var security
     */
    public $security;

    /**
     * @var tools[]
     */
    public $tools;

    /**
     * @var workFlows[]
     */
    public $workFlows;
    protected $_name = [
        'historyConfig' => 'historyConfig',
        'longTermMemory' => 'longTermMemory',
        'parameters' => 'parameters',
        'ragConfig' => 'ragConfig',
        'security' => 'security',
        'tools' => 'tools',
        'workFlows' => 'workFlows',
    ];

    public function validate()
    {
        if (null !== $this->historyConfig) {
            $this->historyConfig->validate();
        }
        if (null !== $this->longTermMemory) {
            $this->longTermMemory->validate();
        }
        if (null !== $this->parameters) {
            $this->parameters->validate();
        }
        if (null !== $this->ragConfig) {
            $this->ragConfig->validate();
        }
        if (null !== $this->security) {
            $this->security->validate();
        }
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        if (\is_array($this->workFlows)) {
            Model::validateArray($this->workFlows);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->historyConfig) {
            $res['historyConfig'] = null !== $this->historyConfig ? $this->historyConfig->toArray($noStream) : $this->historyConfig;
        }

        if (null !== $this->longTermMemory) {
            $res['longTermMemory'] = null !== $this->longTermMemory ? $this->longTermMemory->toArray($noStream) : $this->longTermMemory;
        }

        if (null !== $this->parameters) {
            $res['parameters'] = null !== $this->parameters ? $this->parameters->toArray($noStream) : $this->parameters;
        }

        if (null !== $this->ragConfig) {
            $res['ragConfig'] = null !== $this->ragConfig ? $this->ragConfig->toArray($noStream) : $this->ragConfig;
        }

        if (null !== $this->security) {
            $res['security'] = null !== $this->security ? $this->security->toArray($noStream) : $this->security;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    $res['tools'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->workFlows) {
            if (\is_array($this->workFlows)) {
                $res['workFlows'] = [];
                $n1 = 0;
                foreach ($this->workFlows as $item1) {
                    $res['workFlows'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['historyConfig'])) {
            $model->historyConfig = historyConfig::fromMap($map['historyConfig']);
        }

        if (isset($map['longTermMemory'])) {
            $model->longTermMemory = longTermMemory::fromMap($map['longTermMemory']);
        }

        if (isset($map['parameters'])) {
            $model->parameters = parameters::fromMap($map['parameters']);
        }

        if (isset($map['ragConfig'])) {
            $model->ragConfig = ragConfig::fromMap($map['ragConfig']);
        }

        if (isset($map['security'])) {
            $model->security = security::fromMap($map['security']);
        }

        if (isset($map['tools'])) {
            if (!empty($map['tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['tools'] as $item1) {
                    $model->tools[$n1++] = tools::fromMap($item1);
                }
            }
        }

        if (isset($map['workFlows'])) {
            if (!empty($map['workFlows'])) {
                $model->workFlows = [];
                $n1 = 0;
                foreach ($map['workFlows'] as $item1) {
                    $model->workFlows[$n1++] = workFlows::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
