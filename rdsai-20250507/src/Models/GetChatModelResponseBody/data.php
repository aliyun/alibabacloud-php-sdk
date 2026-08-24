<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetChatModelResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $contextWindow;

    /**
     * @var bool
     */
    public $default;

    /**
     * @var string[]
     */
    public $features;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string[]
     */
    public $thinkingLevels;
    protected $_name = [
        'contextWindow' => 'ContextWindow',
        'default' => 'Default',
        'features' => 'Features',
        'modelId' => 'ModelId',
        'thinkingLevels' => 'ThinkingLevels',
    ];

    public function validate()
    {
        if (\is_array($this->features)) {
            Model::validateArray($this->features);
        }
        if (\is_array($this->thinkingLevels)) {
            Model::validateArray($this->thinkingLevels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contextWindow) {
            $res['ContextWindow'] = $this->contextWindow;
        }

        if (null !== $this->default) {
            $res['Default'] = $this->default;
        }

        if (null !== $this->features) {
            if (\is_array($this->features)) {
                $res['Features'] = [];
                $n1 = 0;
                foreach ($this->features as $item1) {
                    $res['Features'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->thinkingLevels) {
            if (\is_array($this->thinkingLevels)) {
                $res['ThinkingLevels'] = [];
                $n1 = 0;
                foreach ($this->thinkingLevels as $item1) {
                    $res['ThinkingLevels'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['ContextWindow'])) {
            $model->contextWindow = $map['ContextWindow'];
        }

        if (isset($map['Default'])) {
            $model->default = $map['Default'];
        }

        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = [];
                $n1 = 0;
                foreach ($map['Features'] as $item1) {
                    $model->features[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['ThinkingLevels'])) {
            if (!empty($map['ThinkingLevels'])) {
                $model->thinkingLevels = [];
                $n1 = 0;
                foreach ($map['ThinkingLevels'] as $item1) {
                    $model->thinkingLevels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
