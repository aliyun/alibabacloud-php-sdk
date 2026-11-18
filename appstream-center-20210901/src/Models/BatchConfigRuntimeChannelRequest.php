<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\BatchConfigRuntimeChannelRequest\channelConfigs;

class BatchConfigRuntimeChannelRequest extends Model
{
    /**
     * @var string
     */
    public $agentPlatform;

    /**
     * @var string
     */
    public $agentProvider;

    /**
     * @var channelConfigs[]
     */
    public $channelConfigs;

    /**
     * @var string
     */
    public $runtimeType;
    protected $_name = [
        'agentPlatform' => 'AgentPlatform',
        'agentProvider' => 'AgentProvider',
        'channelConfigs' => 'ChannelConfigs',
        'runtimeType' => 'RuntimeType',
    ];

    public function validate()
    {
        if (\is_array($this->channelConfigs)) {
            Model::validateArray($this->channelConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentPlatform) {
            $res['AgentPlatform'] = $this->agentPlatform;
        }

        if (null !== $this->agentProvider) {
            $res['AgentProvider'] = $this->agentProvider;
        }

        if (null !== $this->channelConfigs) {
            if (\is_array($this->channelConfigs)) {
                $res['ChannelConfigs'] = [];
                $n1 = 0;
                foreach ($this->channelConfigs as $item1) {
                    $res['ChannelConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->runtimeType) {
            $res['RuntimeType'] = $this->runtimeType;
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
        if (isset($map['AgentPlatform'])) {
            $model->agentPlatform = $map['AgentPlatform'];
        }

        if (isset($map['AgentProvider'])) {
            $model->agentProvider = $map['AgentProvider'];
        }

        if (isset($map['ChannelConfigs'])) {
            if (!empty($map['ChannelConfigs'])) {
                $model->channelConfigs = [];
                $n1 = 0;
                foreach ($map['ChannelConfigs'] as $item1) {
                    $model->channelConfigs[$n1] = channelConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RuntimeType'])) {
            $model->runtimeType = $map['RuntimeType'];
        }

        return $model;
    }
}
