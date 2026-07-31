<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppAndBindingRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppAndBindingRequest\bindingConfig\agents;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppAndBindingRequest\bindingConfig\commands;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppAndBindingRequest\bindingConfig\mcps;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppAndBindingRequest\bindingConfig\plugins;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppAndBindingRequest\bindingConfig\ragConfig;

class bindingConfig extends Model
{
    /**
     * @var agents[]
     */
    public $agents;

    /**
     * @var commands[]
     */
    public $commands;

    /**
     * @var mcps[]
     */
    public $mcps;

    /**
     * @var plugins[]
     */
    public $plugins;

    /**
     * @var ragConfig
     */
    public $ragConfig;
    protected $_name = [
        'agents' => 'Agents',
        'commands' => 'Commands',
        'mcps' => 'Mcps',
        'plugins' => 'Plugins',
        'ragConfig' => 'RagConfig',
    ];

    public function validate()
    {
        if (\is_array($this->agents)) {
            Model::validateArray($this->agents);
        }
        if (\is_array($this->commands)) {
            Model::validateArray($this->commands);
        }
        if (\is_array($this->mcps)) {
            Model::validateArray($this->mcps);
        }
        if (\is_array($this->plugins)) {
            Model::validateArray($this->plugins);
        }
        if (null !== $this->ragConfig) {
            $this->ragConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agents) {
            if (\is_array($this->agents)) {
                $res['Agents'] = [];
                $n1 = 0;
                foreach ($this->agents as $item1) {
                    $res['Agents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->commands) {
            if (\is_array($this->commands)) {
                $res['Commands'] = [];
                $n1 = 0;
                foreach ($this->commands as $item1) {
                    $res['Commands'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mcps) {
            if (\is_array($this->mcps)) {
                $res['Mcps'] = [];
                $n1 = 0;
                foreach ($this->mcps as $item1) {
                    $res['Mcps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->plugins) {
            if (\is_array($this->plugins)) {
                $res['Plugins'] = [];
                $n1 = 0;
                foreach ($this->plugins as $item1) {
                    $res['Plugins'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ragConfig) {
            $res['RagConfig'] = null !== $this->ragConfig ? $this->ragConfig->toArray($noStream) : $this->ragConfig;
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
        if (isset($map['Agents'])) {
            if (!empty($map['Agents'])) {
                $model->agents = [];
                $n1 = 0;
                foreach ($map['Agents'] as $item1) {
                    $model->agents[$n1] = agents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Commands'])) {
            if (!empty($map['Commands'])) {
                $model->commands = [];
                $n1 = 0;
                foreach ($map['Commands'] as $item1) {
                    $model->commands[$n1] = commands::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Mcps'])) {
            if (!empty($map['Mcps'])) {
                $model->mcps = [];
                $n1 = 0;
                foreach ($map['Mcps'] as $item1) {
                    $model->mcps[$n1] = mcps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Plugins'])) {
            if (!empty($map['Plugins'])) {
                $model->plugins = [];
                $n1 = 0;
                foreach ($map['Plugins'] as $item1) {
                    $model->plugins[$n1] = plugins::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RagConfig'])) {
            $model->ragConfig = ragConfig::fromMap($map['RagConfig']);
        }

        return $model;
    }
}
