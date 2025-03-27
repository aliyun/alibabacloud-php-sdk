<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetTextTemplateResponseBody\availableIndustry\textModeTypes;

use AlibabaCloud\Dara\Model;

class textStyles extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $templateKey;
    protected $_name = [
        'desc' => 'desc',
        'disabled' => 'disabled',
        'name' => 'name',
        'templateKey' => 'templateKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->disabled) {
            $res['disabled'] = $this->disabled;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->templateKey) {
            $res['templateKey'] = $this->templateKey;
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
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['disabled'])) {
            $model->disabled = $map['disabled'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['templateKey'])) {
            $model->templateKey = $map['templateKey'];
        }

        return $model;
    }
}
