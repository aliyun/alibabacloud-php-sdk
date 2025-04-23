<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetModelResponseBody\result\content\request\parameters;

use AlibabaCloud\Dara\Model;

class build extends Model
{
    /**
     * @var string
     */
    public $inputType;
    protected $_name = [
        'inputType' => 'input_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputType) {
            $res['input_type'] = $this->inputType;
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
        if (isset($map['input_type'])) {
            $model->inputType = $map['input_type'];
        }

        return $model;
    }
}
