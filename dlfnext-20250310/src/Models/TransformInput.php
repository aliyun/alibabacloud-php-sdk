<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class TransformInput extends Model
{
    /**
     * @var mixed
     */
    public $input;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'input' => 'input',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->input) {
            $res['input'] = $this->input;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['input'])) {
            $model->input = $map['input'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
