<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageSplicingTaskRequest;

use AlibabaCloud\Dara\Model;

class sources extends Model
{
    /**
     * @var int
     */
    public $rotate;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'rotate' => 'Rotate',
        'URI' => 'URI',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rotate) {
            $res['Rotate'] = $this->rotate;
        }

        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
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
        if (isset($map['Rotate'])) {
            $model->rotate = $map['Rotate'];
        }

        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
