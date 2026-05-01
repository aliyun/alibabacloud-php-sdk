<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ConfigRuntimeChannelRequest extends Model
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
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $runtimeIds;

    /**
     * @var string
     */
    public $runtimeType;
    protected $_name = [
        'agentPlatform' => 'AgentPlatform',
        'agentProvider' => 'AgentProvider',
        'code' => 'Code',
        'config' => 'Config',
        'name' => 'Name',
        'runtimeIds' => 'RuntimeIds',
        'runtimeType' => 'RuntimeType',
    ];

    public function validate()
    {
        if (\is_array($this->runtimeIds)) {
            Model::validateArray($this->runtimeIds);
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

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->runtimeIds) {
            if (\is_array($this->runtimeIds)) {
                $res['RuntimeIds'] = [];
                $n1 = 0;
                foreach ($this->runtimeIds as $item1) {
                    $res['RuntimeIds'][$n1] = $item1;
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

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RuntimeIds'])) {
            if (!empty($map['RuntimeIds'])) {
                $model->runtimeIds = [];
                $n1 = 0;
                foreach ($map['RuntimeIds'] as $item1) {
                    $model->runtimeIds[$n1] = $item1;
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
