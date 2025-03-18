<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserRequest;

use AlibabaCloud\Tea\Model;

class customFields extends Model
{
    /**
     * @description Field name
     *
     * @example age
     *
     * @var string
     */
    public $fieldName;

    /**
     * @description Filed value
     *
     * @example fieldValue_001
     *
     * @var string
     */
    public $fieldValue;
    protected $_name = [
        'fieldName' => 'fieldName',
        'fieldValue' => 'fieldValue',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldName) {
            $res['fieldName'] = $this->fieldName;
        }
        if (null !== $this->fieldValue) {
            $res['fieldValue'] = $this->fieldValue;
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
        if (isset($map['fieldName'])) {
            $model->fieldName = $map['fieldName'];
        }
        if (isset($map['fieldValue'])) {
            $model->fieldValue = $map['fieldValue'];
        }

        return $model;
    }
}
