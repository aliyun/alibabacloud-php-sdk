<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\chatConfig\searchParam;

class chatConfig extends Model
{
    /**
     * @var bool
     */
    public $enableThinking;

    /**
     * @var string[]
     */
    public $excludeGenerateOptions;

    /**
     * @var string
     */
    public $generateLevel;

    /**
     * @var string
     */
    public $generateTechnology;

    /**
     * @var string[]
     */
    public $searchModels;

    /**
     * @var searchParam
     */
    public $searchParam;
    protected $_name = [
        'enableThinking' => 'EnableThinking',
        'excludeGenerateOptions' => 'ExcludeGenerateOptions',
        'generateLevel' => 'GenerateLevel',
        'generateTechnology' => 'GenerateTechnology',
        'searchModels' => 'SearchModels',
        'searchParam' => 'SearchParam',
    ];

    public function validate()
    {
        if (\is_array($this->excludeGenerateOptions)) {
            Model::validateArray($this->excludeGenerateOptions);
        }
        if (\is_array($this->searchModels)) {
            Model::validateArray($this->searchModels);
        }
        if (null !== $this->searchParam) {
            $this->searchParam->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableThinking) {
            $res['EnableThinking'] = $this->enableThinking;
        }

        if (null !== $this->excludeGenerateOptions) {
            if (\is_array($this->excludeGenerateOptions)) {
                $res['ExcludeGenerateOptions'] = [];
                $n1 = 0;
                foreach ($this->excludeGenerateOptions as $item1) {
                    $res['ExcludeGenerateOptions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->generateLevel) {
            $res['GenerateLevel'] = $this->generateLevel;
        }

        if (null !== $this->generateTechnology) {
            $res['GenerateTechnology'] = $this->generateTechnology;
        }

        if (null !== $this->searchModels) {
            if (\is_array($this->searchModels)) {
                $res['SearchModels'] = [];
                $n1 = 0;
                foreach ($this->searchModels as $item1) {
                    $res['SearchModels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchParam) {
            $res['SearchParam'] = null !== $this->searchParam ? $this->searchParam->toArray($noStream) : $this->searchParam;
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
        if (isset($map['EnableThinking'])) {
            $model->enableThinking = $map['EnableThinking'];
        }

        if (isset($map['ExcludeGenerateOptions'])) {
            if (!empty($map['ExcludeGenerateOptions'])) {
                $model->excludeGenerateOptions = [];
                $n1 = 0;
                foreach ($map['ExcludeGenerateOptions'] as $item1) {
                    $model->excludeGenerateOptions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GenerateLevel'])) {
            $model->generateLevel = $map['GenerateLevel'];
        }

        if (isset($map['GenerateTechnology'])) {
            $model->generateTechnology = $map['GenerateTechnology'];
        }

        if (isset($map['SearchModels'])) {
            if (!empty($map['SearchModels'])) {
                $model->searchModels = [];
                $n1 = 0;
                foreach ($map['SearchModels'] as $item1) {
                    $model->searchModels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SearchParam'])) {
            $model->searchParam = searchParam::fromMap($map['SearchParam']);
        }

        return $model;
    }
}
