<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourceSchemasResponseBody\result;

use AlibabaCloud\Tea\Model;

class primaryKey extends Model
{
    /**
     * @description Indicates whether the field has the primary key attribute. Valid values: **true** and **false**.
     *
     * @example false
     *
     * @var bool
     */
    public $hasPrimaryKeyAttribute;

    /**
     * @description Indicates whether the field is the primary key. Valid values: **true** and **false**.
     *
     * @example false
     *
     * @var bool
     */
    public $isPrimaryKey;

    /**
     * @description Indicates whether the field can be sorted. Valid values: **true** and **false**.
     *
     * @example false
     *
     * @var bool
     */
    public $isPrimaryKeySorted;
    protected $_name = [
        'hasPrimaryKeyAttribute' => 'hasPrimaryKeyAttribute',
        'isPrimaryKey'           => 'isPrimaryKey',
        'isPrimaryKeySorted'     => 'isPrimaryKeySorted',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return primaryKey
     */
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
