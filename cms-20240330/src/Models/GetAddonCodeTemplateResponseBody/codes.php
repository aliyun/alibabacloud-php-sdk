<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonCodeTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class codes extends Model
{
    /**
     * @var string
     */
    public $codeTemplate;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'codeTemplate' => 'codeTemplate',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeTemplate) {
            $res['codeTemplate'] = $this->codeTemplate;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['codeTemplate'])) {
            $model->codeTemplate = $map['codeTemplate'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
