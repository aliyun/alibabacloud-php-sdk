<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDatabaseSchemaResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example id
     *
     * @var string
     */
    public $fieldName;

    /**
     * @example STRING
     *
     * @var string
     */
    public $fieldType;

    /**
     * @example FT_UINT64
     *
     * @var mixed[]
     */
    public $fieldTypeDetail;

    /**
     * @example test_tusou_v2
     *
     * @var string
     */
    public $indexName;

    /**
     * @example NUMBER
     *
     * @var string
     */
    public $indexType;
    protected $_name = [
        'fieldName'       => 'fieldName',
        'fieldType'       => 'fieldType',
        'fieldTypeDetail' => 'fieldTypeDetail',
        'indexName'       => 'indexName',
        'indexType'       => 'indexType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldName) {
            $res['fieldName'] = $this->fieldName;
        }
        if (null !== $this->fieldType) {
            $res['fieldType'] = $this->fieldType;
        }
        if (null !== $this->fieldTypeDetail) {
            $res['fieldTypeDetail'] = $this->fieldTypeDetail;
        }
        if (null !== $this->indexName) {
            $res['indexName'] = $this->indexName;
        }
        if (null !== $this->indexType) {
            $res['indexType'] = $this->indexType;
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
        if (isset($map['fieldName'])) {
            $model->fieldName = $map['fieldName'];
        }
        if (isset($map['fieldType'])) {
            $model->fieldType = $map['fieldType'];
        }
        if (isset($map['fieldTypeDetail'])) {
            $model->fieldTypeDetail = $map['fieldTypeDetail'];
        }
        if (isset($map['indexName'])) {
            $model->indexName = $map['indexName'];
        }
        if (isset($map['indexType'])) {
            $model->indexType = $map['indexType'];
        }

        return $model;
    }
}
