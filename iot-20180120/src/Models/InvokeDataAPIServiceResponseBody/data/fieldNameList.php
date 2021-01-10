<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\InvokeDataAPIServiceResponseBody\data;

use AlibabaCloud\Tea\Model;

class fieldNameList extends Model
{
    /**
     * @var string[]
     */
    public $fieldNameList;
    protected $_name = [
        'fieldNameList' => 'FieldNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldNameList) {
            $res['FieldNameList'] = $this->fieldNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fieldNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldNameList'])) {
            if (!empty($map['FieldNameList'])) {
                $model->fieldNameList = $map['FieldNameList'];
            }
        }

        return $model;
    }
}
