<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentResponseBody\data\list_;

use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentResponseBody\data\list_\applicationConfig\historyConfig;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentResponseBody\data\list_\applicationConfig\longTermMemory;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentResponseBody\data\list_\applicationConfig\parameters;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentResponseBody\data\list_\applicationConfig\ragConfig;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentResponseBody\data\list_\applicationConfig\security;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentResponseBody\data\list_\applicationConfig\tools;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentResponseBody\data\list_\applicationConfig\workFlows;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->historyConfig) {
            $res['historyConfig'] = null !== $this->historyConfig ? $this->historyConfig->toMap() : null;
        }
        if (null !== $this->longTermMemory) {
            $res['longTermMemory'] = null !== $this->longTermMemory ? $this->longTermMemory->toMap() : null;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = null !== $this->parameters ? $this->parameters->toMap() : null;
        }
        if (null !== $this->ragConfig) {
            $res['ragConfig'] = null !== $this->ragConfig ? $this->ragConfig->toMap() : null;
        }
        if (null !== $this->security) {
            $res['security'] = null !== $this->security ? $this->security->toMap() : null;
        }
        if (null !== $this->tools) {
            $res['tools'] = [];
            if (null !== $this->tools && \is_array($this->tools)) {
                $n = 0;
                foreach ($this->tools as $item) {
                    $res['tools'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workFlows) {
            $res['workFlows'] = [];
            if (null !== $this->workFlows && \is_array($this->workFlows)) {
                $n = 0;
                foreach ($this->workFlows as $item) {
                    $res['workFlows'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationConfig
     */
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
                $n = 0;
                foreach ($map['tools'] as $item) {
                    $model->tools[$n++] = null !== $item ? tools::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['workFlows'])) {
            if (!empty($map['workFlows'])) {
                $model->workFlows = [];
                $n = 0;
                foreach ($map['workFlows'] as $item) {
                    $model->workFlows[$n++] = null !== $item ? workFlows::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
