<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextTemplateResponseBody\availableIndustry\textModeTypes;

class availableIndustry extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var textModeTypes[]
     */
    public $textModeTypes;
    protected $_name = [
        'name' => 'name',
        'textModeTypes' => 'textModeTypes',
    ];

    public function validate()
    {
        if (\is_array($this->textModeTypes)) {
            Model::validateArray($this->textModeTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->textModeTypes) {
            if (\is_array($this->textModeTypes)) {
                $res['textModeTypes'] = [];
                $n1 = 0;
                foreach ($this->textModeTypes as $item1) {
                    $res['textModeTypes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['textModeTypes'])) {
            if (!empty($map['textModeTypes'])) {
                $model->textModeTypes = [];
                $n1 = 0;
                foreach ($map['textModeTypes'] as $item1) {
                    $model->textModeTypes[$n1++] = textModeTypes::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
