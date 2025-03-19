<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiResponseContract;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @example 正常接口响应
     *
     * @var string
     */
    public $description;

    /**
     * @example {"result": "ok"}
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return items
     */
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
