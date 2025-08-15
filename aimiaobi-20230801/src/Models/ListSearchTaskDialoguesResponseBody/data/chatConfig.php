<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTaskDialoguesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTaskDialoguesResponseBody\data\chatConfig\searchParam;

class chatConfig extends Model
{
    /**
     * @var int
     */
    public $dialogueType;

    /**
     * @var bool
     */
    public $endToEnd;

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
        'dialogueType' => 'DialogueType',
        'endToEnd' => 'EndToEnd',
        'generateLevel' => 'GenerateLevel',
        'generateTechnology' => 'GenerateTechnology',
        'searchModels' => 'SearchModels',
        'searchParam' => 'SearchParam',
    ];

    public function validate()
    {
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
        if (null !== $this->dialogueType) {
            $res['DialogueType'] = $this->dialogueType;
        }

        if (null !== $this->endToEnd) {
            $res['EndToEnd'] = $this->endToEnd;
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
        if (isset($map['DialogueType'])) {
            $model->dialogueType = $map['DialogueType'];
        }

        if (isset($map['EndToEnd'])) {
            $model->endToEnd = $map['EndToEnd'];
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
