<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiResponseContract;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $example;

    /**
     * @var string
     */
    public $jsonSchema;
    protected $_name = [
        'code' => 'code',
        'description' => 'description',
        'example' => 'example',
        'jsonSchema' => 'jsonSchema',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->example) {
            $res['example'] = $this->example;
        }

        if (null !== $this->jsonSchema) {
            $res['jsonSchema'] = $this->jsonSchema;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['example'])) {
            $model->example = $map['example'];
        }

        if (isset($map['jsonSchema'])) {
            $model->jsonSchema = $map['jsonSchema'];
        }

        return $model;
    }
}
