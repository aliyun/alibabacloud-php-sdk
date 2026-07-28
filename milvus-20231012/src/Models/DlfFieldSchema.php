<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;

class DlfFieldSchema extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $dimension;

    /**
     * @var string
     */
    public $dlfFieldType;

    /**
     * @var string
     */
    public $fieldName;

    /**
     * @var bool
     */
    public $isPrimaryKey;

    /**
     * @var bool
     */
    public $isSupported;

    /**
     * @var bool
     */
    public $isVectorField;

    /**
     * @var string
     */
    public $milvusFieldType;

    /**
     * @var bool
     */
    public $nullable;

    /**
     * @var string
     */
    public $unsupportedReason;
    protected $_name = [
        'comment' => 'comment',
        'dimension' => 'dimension',
        'dlfFieldType' => 'dlfFieldType',
        'fieldName' => 'fieldName',
        'isPrimaryKey' => 'isPrimaryKey',
        'isSupported' => 'isSupported',
        'isVectorField' => 'isVectorField',
        'milvusFieldType' => 'milvusFieldType',
        'nullable' => 'nullable',
        'unsupportedReason' => 'unsupportedReason',
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

        if (null !== $this->dimension) {
            $res['dimension'] = $this->dimension;
        }

        if (null !== $this->dlfFieldType) {
            $res['dlfFieldType'] = $this->dlfFieldType;
        }

        if (null !== $this->fieldName) {
            $res['fieldName'] = $this->fieldName;
        }

        if (null !== $this->isPrimaryKey) {
            $res['isPrimaryKey'] = $this->isPrimaryKey;
        }

        if (null !== $this->isSupported) {
            $res['isSupported'] = $this->isSupported;
        }

        if (null !== $this->isVectorField) {
            $res['isVectorField'] = $this->isVectorField;
        }

        if (null !== $this->milvusFieldType) {
            $res['milvusFieldType'] = $this->milvusFieldType;
        }

        if (null !== $this->nullable) {
            $res['nullable'] = $this->nullable;
        }

        if (null !== $this->unsupportedReason) {
            $res['unsupportedReason'] = $this->unsupportedReason;
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

        if (isset($map['dimension'])) {
            $model->dimension = $map['dimension'];
        }

        if (isset($map['dlfFieldType'])) {
            $model->dlfFieldType = $map['dlfFieldType'];
        }

        if (isset($map['fieldName'])) {
            $model->fieldName = $map['fieldName'];
        }

        if (isset($map['isPrimaryKey'])) {
            $model->isPrimaryKey = $map['isPrimaryKey'];
        }

        if (isset($map['isSupported'])) {
            $model->isSupported = $map['isSupported'];
        }

        if (isset($map['isVectorField'])) {
            $model->isVectorField = $map['isVectorField'];
        }

        if (isset($map['milvusFieldType'])) {
            $model->milvusFieldType = $map['milvusFieldType'];
        }

        if (isset($map['nullable'])) {
            $model->nullable = $map['nullable'];
        }

        if (isset($map['unsupportedReason'])) {
            $model->unsupportedReason = $map['unsupportedReason'];
        }

        return $model;
    }
}
