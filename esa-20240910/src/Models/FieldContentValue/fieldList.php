<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\FieldContentValue;

use AlibabaCloud\Tea\Model;

class fieldList extends Model
{
    /**
     * @example ClientIp
     *
     * @var string
     */
    public $fieldName;

    /**
     * @example IP address of the client.
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $descriptionCn;

    /**
     * @example Client
     *
     * @var string
     */
    public $category;

    /**
     * @example String
     *
     * @var string
     */
    public $dataType;

    /**
     * @example 1
     *
     * @var int
     */
    public $sortOrder;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDefault;
    protected $_name = [
        'fieldName'     => 'FieldName',
        'description'   => 'Description',
        'descriptionCn' => 'DescriptionCn',
        'category'      => 'Category',
        'dataType'      => 'DataType',
        'sortOrder'     => 'SortOrder',
        'isDefault'     => 'IsDefault',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->descriptionCn) {
            $res['DescriptionCn'] = $this->descriptionCn;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fieldList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DescriptionCn'])) {
            $model->descriptionCn = $map['DescriptionCn'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        return $model;
    }
}
