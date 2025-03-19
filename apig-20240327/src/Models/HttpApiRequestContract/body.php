<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiRequestContract;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @example application/json
     *
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $description;

    /**
     * @example {"key":"value"}
     *
     * @var string
     */
    public $example;

    /**
     * @var string
     */
    public $jsonSchema;
    protected $_name = [
        'contentType' => 'contentType',
        'description' => 'description',
        'example' => 'example',
        'jsonSchema' => 'jsonSchema',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
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
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
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
