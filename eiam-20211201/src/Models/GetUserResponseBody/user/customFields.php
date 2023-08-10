<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetUserResponseBody\user;

use AlibabaCloud\Tea\Model;

class customFields extends Model
{
    /**
     * @description The identifier of the custom field.
     *
     * @example age
     *
     * @var string
     */
    public $fieldName;

    /**
     * @description The value of the custom field.
     *
     * @example 10
     *
     * @var string
     */
    public $fieldValue;
    protected $_name = [
        'fieldName'  => 'FieldName',
        'fieldValue' => 'FieldValue',
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
        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customFields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }

        return $model;
    }
}
