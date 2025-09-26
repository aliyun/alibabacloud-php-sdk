<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class LLMAPIConfiguration extends Model
{
    /**
     * @var string[]
     */
    public $aiProtocols;

    /**
     * @var AttachPolicyConfig[]
     */
    public $attachPolicyConfigs;

    /**
     * @var string
     */
    public $basePath;

    /**
     * @var LLMDeployConfig[]
     */
    public $deployConfigs;

    /**
     * @var string
     */
    public $modelCategory;

    /**
     * @var bool
     */
    public $removeBasePathOnForward;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aiProtocols' => 'aiProtocols',
        'attachPolicyConfigs' => 'attachPolicyConfigs',
        'basePath' => 'basePath',
        'deployConfigs' => 'deployConfigs',
        'modelCategory' => 'modelCategory',
        'removeBasePathOnForward' => 'removeBasePathOnForward',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->aiProtocols)) {
            Model::validateArray($this->aiProtocols);
        }
        if (\is_array($this->attachPolicyConfigs)) {
            Model::validateArray($this->attachPolicyConfigs);
        }
        if (\is_array($this->deployConfigs)) {
            Model::validateArray($this->deployConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiProtocols) {
            if (\is_array($this->aiProtocols)) {
                $res['aiProtocols'] = [];
                $n1 = 0;
                foreach ($this->aiProtocols as $item1) {
                    $res['aiProtocols'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->attachPolicyConfigs) {
            if (\is_array($this->attachPolicyConfigs)) {
                $res['attachPolicyConfigs'] = [];
                $n1 = 0;
                foreach ($this->attachPolicyConfigs as $item1) {
                    $res['attachPolicyConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->basePath) {
            $res['basePath'] = $this->basePath;
        }

        if (null !== $this->deployConfigs) {
            if (\is_array($this->deployConfigs)) {
                $res['deployConfigs'] = [];
                $n1 = 0;
                foreach ($this->deployConfigs as $item1) {
                    $res['deployConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelCategory) {
            $res['modelCategory'] = $this->modelCategory;
        }

        if (null !== $this->removeBasePathOnForward) {
            $res['removeBasePathOnForward'] = $this->removeBasePathOnForward;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['aiProtocols'])) {
            if (!empty($map['aiProtocols'])) {
                $model->aiProtocols = [];
                $n1 = 0;
                foreach ($map['aiProtocols'] as $item1) {
                    $model->aiProtocols[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['attachPolicyConfigs'])) {
            if (!empty($map['attachPolicyConfigs'])) {
                $model->attachPolicyConfigs = [];
                $n1 = 0;
                foreach ($map['attachPolicyConfigs'] as $item1) {
                    $model->attachPolicyConfigs[$n1] = AttachPolicyConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['basePath'])) {
            $model->basePath = $map['basePath'];
        }

        if (isset($map['deployConfigs'])) {
            if (!empty($map['deployConfigs'])) {
                $model->deployConfigs = [];
                $n1 = 0;
                foreach ($map['deployConfigs'] as $item1) {
                    $model->deployConfigs[$n1] = LLMDeployConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['modelCategory'])) {
            $model->modelCategory = $map['modelCategory'];
        }

        if (isset($map['removeBasePathOnForward'])) {
            $model->removeBasePathOnForward = $map['removeBasePathOnForward'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
