<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextTemplateResponseBody\availableIndustry;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextTemplateResponseBody\availableIndustry\textModeTypes\textStyles;

class textModeTypes extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var textStyles[]
     */
    public $textStyles;
    protected $_name = [
        'name'       => 'name',
        'textStyles' => 'textStyles',
    ];

    public function validate()
    {
        if (\is_array($this->textStyles)) {
            Model::validateArray($this->textStyles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->textStyles) {
            if (\is_array($this->textStyles)) {
                $res['textStyles'] = [];
                $n1                = 0;
                foreach ($this->textStyles as $item1) {
                    $res['textStyles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['textStyles'])) {
            if (!empty($map['textStyles'])) {
                $model->textStyles = [];
                $n1                = 0;
                foreach ($map['textStyles'] as $item1) {
                    $model->textStyles[$n1++] = textStyles::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
