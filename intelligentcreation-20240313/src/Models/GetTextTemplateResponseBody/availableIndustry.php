<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextTemplateResponseBody;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextTemplateResponseBody\availableIndustry\textModeTypes;
use AlibabaCloud\Tea\Model;

class availableIndustry extends Model
{
    /**
     * @example Car
     *
     * @var string
     */
    public $name;

    /**
     * @var textModeTypes[]
     */
    public $textModeTypes;
    protected $_name = [
        'name'          => 'name',
        'textModeTypes' => 'textModeTypes',
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
        if (null !== $this->textModeTypes) {
            $res['textModeTypes'] = [];
            if (null !== $this->textModeTypes && \is_array($this->textModeTypes)) {
                $n = 0;
                foreach ($this->textModeTypes as $item) {
                    $res['textModeTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableIndustry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['textModeTypes'])) {
            if (!empty($map['textModeTypes'])) {
                $model->textModeTypes = [];
                $n                    = 0;
                foreach ($map['textModeTypes'] as $item) {
                    $model->textModeTypes[$n++] = null !== $item ? textModeTypes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
