<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourceSchemasResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDataSourceSchemasResponseBody\result\primaryKey;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Indicates whether the index properties are added. Valid values: true and false. **true** indicates that the index properties are added, and **false** indicates that the index properties are not added.
     *
     * @example false
     *
     * @var bool
     */
    public $addIndex;

    /**
     * @description Indicates whether it is an attribute field. Valid values: true and false. **true** indicates that it is an attribute field, and **false** indicates that it is not an attribute field.
     *
     * @example false
     *
     * @var bool
     */
    public $attribute;

    /**
     * @description Indicates whether it is a custom field. Valid values: true and false. **true** indicates that it is a custom field, and **false** indicates that it is not a custom field.
     *
     * @example false
     *
     * @var bool
     */
    public $custom;

    /**
     * @description The name of the field.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The primary key.
     *
     * @var primaryKey
     */
    public $primaryKey;

    /**
     * @description Indicates whether the information can be displayed. Valid values: true and false. **true** indicates that the information can be displayed, and **false** indicates that the information cannot be displayed.
     *
     * @example false
     *
     * @var bool
     */
    public $summary;

    /**
     * @description The type of the field.
     *
     * @example STRING
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'addIndex'   => 'addIndex',
        'attribute'  => 'attribute',
        'custom'     => 'custom',
        'name'       => 'name',
        'primaryKey' => 'primaryKey',
        'summary'    => 'summary',
        'type'       => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addIndex) {
            $res['addIndex'] = $this->addIndex;
        }
        if (null !== $this->attribute) {
            $res['attribute'] = $this->attribute;
        }
        if (null !== $this->custom) {
            $res['custom'] = $this->custom;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->primaryKey) {
            $res['primaryKey'] = null !== $this->primaryKey ? $this->primaryKey->toMap() : null;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['addIndex'])) {
            $model->addIndex = $map['addIndex'];
        }
        if (isset($map['attribute'])) {
            $model->attribute = $map['attribute'];
        }
        if (isset($map['custom'])) {
            $model->custom = $map['custom'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['primaryKey'])) {
            $model->primaryKey = primaryKey::fromMap($map['primaryKey']);
        }
        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
