<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourceSchemasResponseBody\result;

use AlibabaCloud\Dara\Model;

class primaryKey extends Model
{
    /**
     * @var bool
     */
    public $hasPrimaryKeyAttribute;

    /**
     * @var bool
     */
    public $isPrimaryKey;

    /**
     * @var bool
     */
    public $isPrimaryKeySorted;
    protected $_name = [
        'hasPrimaryKeyAttribute' => 'hasPrimaryKeyAttribute',
        'isPrimaryKey' => 'isPrimaryKey',
        'isPrimaryKeySorted' => 'isPrimaryKeySorted',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasPrimaryKeyAttribute) {
            $res['hasPrimaryKeyAttribute'] = $this->hasPrimaryKeyAttribute;
        }

        if (null !== $this->isPrimaryKey) {
            $res['isPrimaryKey'] = $this->isPrimaryKey;
        }

        if (null !== $this->isPrimaryKeySorted) {
            $res['isPrimaryKeySorted'] = $this->isPrimaryKeySorted;
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
        if (isset($map['hasPrimaryKeyAttribute'])) {
            $model->hasPrimaryKeyAttribute = $map['hasPrimaryKeyAttribute'];
        }

        if (isset($map['isPrimaryKey'])) {
            $model->isPrimaryKey = $map['isPrimaryKey'];
        }

        if (isset($map['isPrimaryKeySorted'])) {
            $model->isPrimaryKeySorted = $map['isPrimaryKeySorted'];
        }

        return $model;
    }
}
