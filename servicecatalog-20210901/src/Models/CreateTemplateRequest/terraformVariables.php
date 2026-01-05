<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateTemplateRequest;

use AlibabaCloud\Dara\Model;

class terraformVariables extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $variableName;
    protected $_name = [
        'description' => 'Description',
        'variableName' => 'VariableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->variableName) {
            $res['VariableName'] = $this->variableName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['VariableName'])) {
            $model->variableName = $map['VariableName'];
        }

        return $model;
    }
}
