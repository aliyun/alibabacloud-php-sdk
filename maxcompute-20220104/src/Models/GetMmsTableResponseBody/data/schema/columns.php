<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsTableResponseBody\data\schema;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @example user id
     *
     * @var string
     */
    public $comment;

    /**
     * @example 10
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @example user_id
     *
     * @var string
     */
    public $name;

    /**
     * @example false
     *
     * @var bool
     */
    public $nullable;

    /**
     * @example bigint
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'comment' => 'comment',
        'defaultValue' => 'defaultValue',
        'name' => 'name',
        'nullable' => 'nullable',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->defaultValue) {
            $res['defaultValue'] = $this->defaultValue;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nullable) {
            $res['nullable'] = $this->nullable;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }
        if (isset($map['defaultValue'])) {
            $model->defaultValue = $map['defaultValue'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nullable'])) {
            $model->nullable = $map['nullable'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
