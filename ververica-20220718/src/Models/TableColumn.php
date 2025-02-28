<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class TableColumn extends Model
{
    /**
     * @var string
     */
    public $expression;
    /**
     * @var MetadataInfo
     */
    public $metadataInfo;
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
        'expression'   => 'expression',
        'metadataInfo' => 'metadataInfo',
        'name'         => 'name',
        'nullable'     => 'nullable',
        'type'         => 'type',
    ];

    public function validate()
    {
        if (null !== $this->metadataInfo) {
            $this->metadataInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expression) {
            $res['expression'] = $this->expression;
        }

        if (null !== $this->metadataInfo) {
            $res['metadataInfo'] = null !== $this->metadataInfo ? $this->metadataInfo->toArray($noStream) : $this->metadataInfo;
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
        if (isset($map['expression'])) {
            $model->expression = $map['expression'];
        }

        if (isset($map['metadataInfo'])) {
            $model->metadataInfo = MetadataInfo::fromMap($map['metadataInfo']);
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
