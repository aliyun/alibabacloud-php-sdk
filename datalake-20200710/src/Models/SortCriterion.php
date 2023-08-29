<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class SortCriterion extends Model
{
    /**
     * @example name
     *
     * @var string
     */
    public $fieldName;

    /**
     * @example asc/desc
     *
     * @var string
     */
    public $sort;
    protected $_name = [
        'fieldName' => 'FieldName',
        'sort'      => 'Sort',
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
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SortCriterion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        return $model;
    }
}
