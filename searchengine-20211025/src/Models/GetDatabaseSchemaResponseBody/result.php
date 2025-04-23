<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDatabaseSchemaResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var string
     */
    public $fieldType;

    /**
     * @var mixed[]
     */
    public $fieldTypeDetail;

    /**
     * @var string
     */
    public $indexName;

    /**
     * @var string
     */
    public $indexType;
    protected $_name = [
        'fieldName' => 'fieldName',
        'fieldType' => 'fieldType',
        'fieldTypeDetail' => 'fieldTypeDetail',
        'indexName' => 'indexName',
        'indexType' => 'indexType',
    ];

    public function validate()
    {
        if (\is_array($this->fieldTypeDetail)) {
            Model::validateArray($this->fieldTypeDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldName) {
            $res['fieldName'] = $this->fieldName;
        }

        if (null !== $this->fieldType) {
            $res['fieldType'] = $this->fieldType;
        }

        if (null !== $this->fieldTypeDetail) {
            if (\is_array($this->fieldTypeDetail)) {
                $res['fieldTypeDetail'] = [];
                foreach ($this->fieldTypeDetail as $key1 => $value1) {
                    $res['fieldTypeDetail'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->indexName) {
            $res['indexName'] = $this->indexName;
        }

        if (null !== $this->indexType) {
            $res['indexType'] = $this->indexType;
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
        if (isset($map['fieldName'])) {
            $model->fieldName = $map['fieldName'];
        }

        if (isset($map['fieldType'])) {
            $model->fieldType = $map['fieldType'];
        }

        if (isset($map['fieldTypeDetail'])) {
            if (!empty($map['fieldTypeDetail'])) {
                $model->fieldTypeDetail = [];
                foreach ($map['fieldTypeDetail'] as $key1 => $value1) {
                    $model->fieldTypeDetail[$key1] = $value1;
                }
            }
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
