<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config\extractionPolicy\model_;

class extractionPolicy extends Model
{
    /**
     * @var string[]
     */
    public $categories;

    /**
     * @var string
     */
    public $customInstructions;

    /**
     * @var string[]
     */
    public $excludeRules;

    /**
     * @var model_
     */
    public $model;

    /**
     * @var string
     */
    public $preset;
    protected $_name = [
        'categories' => 'categories',
        'customInstructions' => 'customInstructions',
        'excludeRules' => 'excludeRules',
        'model' => 'model',
        'preset' => 'preset',
    ];

    public function validate()
    {
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        if (\is_array($this->excludeRules)) {
            Model::validateArray($this->excludeRules);
        }
        if (null !== $this->model) {
            $this->model->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['categories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->customInstructions) {
            $res['customInstructions'] = $this->customInstructions;
        }

        if (null !== $this->excludeRules) {
            if (\is_array($this->excludeRules)) {
                $res['excludeRules'] = [];
                $n1 = 0;
                foreach ($this->excludeRules as $item1) {
                    $res['excludeRules'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->model) {
            $res['model'] = null !== $this->model ? $this->model->toArray($noStream) : $this->model;
        }

        if (null !== $this->preset) {
            $res['preset'] = $this->preset;
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
        if (isset($map['categories'])) {
            if (!empty($map['categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['categories'] as $item1) {
                    $model->categories[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['customInstructions'])) {
            $model->customInstructions = $map['customInstructions'];
        }

        if (isset($map['excludeRules'])) {
            if (!empty($map['excludeRules'])) {
                $model->excludeRules = [];
                $n1 = 0;
                foreach ($map['excludeRules'] as $item1) {
                    $model->excludeRules[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['model'])) {
            $model->model = model_::fromMap($map['model']);
        }

        if (isset($map['preset'])) {
            $model->preset = $map['preset'];
        }

        return $model;
    }
}
