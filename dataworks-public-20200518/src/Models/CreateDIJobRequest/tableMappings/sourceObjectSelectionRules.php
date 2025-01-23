<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\tableMappings;

use AlibabaCloud\Dara\Model;

class sourceObjectSelectionRules extends Model
{
    /**
     * @var string
     */
    public $expression;
    /**
     * @var string
     */
    public $objectType;
    protected $_name = [
        'expression' => 'Expression',
        'objectType' => 'ObjectType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
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
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        return $model;
    }
}
