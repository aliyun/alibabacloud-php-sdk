<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\InvokeDataAPIServiceResponseBody\data;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->fieldNameList)) {
            Model::validateArray($this->fieldNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldNameList) {
            if (\is_array($this->fieldNameList)) {
                $res['FieldNameList'] = [];
                $n1 = 0;
                foreach ($this->fieldNameList as $item1) {
                    $res['FieldNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['FieldNameList'])) {
            if (!empty($map['FieldNameList'])) {
                $model->fieldNameList = [];
                $n1 = 0;
                foreach ($map['FieldNameList'] as $item1) {
                    $model->fieldNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
