<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateUserRequest;

use AlibabaCloud\Tea\Model;

class customFields extends Model
{
    /**
     * @description The name of the extended field. You must create an extended field before you specify this parameter. To create an extended field, go to the Extended Fields page of the specified EIAM instance in the IDaaS console.
     *
     * @example nick_name
     *
     * @var string
     */
    public $fieldName;

    /**
     * @description The value of the extended field. The value follows the limits on the properties of the extended field.
     *
     * @example test_value
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @description The operation type of the extended field. Valid values:
     *
     *   add: adds a value to the extended field of the account.
     *   replace: replaces the existing value of the extended field of the account. If the existing value to be replaced does not exist, this operation changes to the add operation.
     *   remove: removes a value from the extended field of the account.
     *
     * @example add
     *
     * @var string
     */
    public $operation;
    protected $_name = [
        'fieldName'  => 'FieldName',
        'fieldValue' => 'FieldValue',
        'operation'  => 'Operation',
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
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
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
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        return $model;
    }
}
