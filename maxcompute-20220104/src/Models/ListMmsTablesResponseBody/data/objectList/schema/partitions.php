<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsTablesResponseBody\data\objectList\schema;

use AlibabaCloud\Dara\Model;

class partitions extends Model
{
    /**
     * @var string
     */
    public $comment;
    /**
     * @var string
     */
    public $defaultValue;
    /**
     * @var string
     */
    public $name;
    /**
     * @var bool
     */
    public $nullable;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'comment'      => 'comment',
        'defaultValue' => 'defaultValue',
        'name'         => 'name',
        'nullable'     => 'nullable',
        'type'         => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
