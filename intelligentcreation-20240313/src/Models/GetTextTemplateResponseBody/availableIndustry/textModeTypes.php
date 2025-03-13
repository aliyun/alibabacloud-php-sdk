<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextTemplateResponseBody\availableIndustry;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextTemplateResponseBody\availableIndustry\textModeTypes\textStyles;
use AlibabaCloud\Tea\Model;

class textModeTypes extends Model
{
    /**
     * @example Rewrite
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->textStyles) {
            $res['textStyles'] = [];
            if (null !== $this->textStyles && \is_array($this->textStyles)) {
                $n = 0;
                foreach ($this->textStyles as $item) {
                    $res['textStyles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textModeTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['textStyles'])) {
            if (!empty($map['textStyles'])) {
                $model->textStyles = [];
                $n                 = 0;
                foreach ($map['textStyles'] as $item) {
                    $model->textStyles[$n++] = null !== $item ? textStyles::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
