<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AgentInfo\instructionTypeParam\tagTreeLevelParam;

use AlibabaCloud\Dara\Model;

class tagTreeLevels extends Model
{
    /**
     * @var string
     */
    public $prompt;

    /**
     * @var int[]
     */
    public $tagTreeIds;
    protected $_name = [
        'prompt' => 'Prompt',
        'tagTreeIds' => 'TagTreeIds',
    ];

    public function validate()
    {
        if (\is_array($this->tagTreeIds)) {
            Model::validateArray($this->tagTreeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->tagTreeIds) {
            if (\is_array($this->tagTreeIds)) {
                $res['TagTreeIds'] = [];
                $n1 = 0;
                foreach ($this->tagTreeIds as $item1) {
                    $res['TagTreeIds'][$n1] = $item1;
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
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['TagTreeIds'])) {
            if (!empty($map['TagTreeIds'])) {
                $model->tagTreeIds = [];
                $n1 = 0;
                foreach ($map['TagTreeIds'] as $item1) {
                    $model->tagTreeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
