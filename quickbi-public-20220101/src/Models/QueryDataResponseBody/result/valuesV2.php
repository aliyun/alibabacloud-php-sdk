<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataResponseBody\result\valuesV2\rowValue;

class valuesV2 extends Model
{
    /**
     * @var rowValue[]
     */
    public $rowValue;
    protected $_name = [
        'rowValue' => 'RowValue',
    ];

    public function validate()
    {
        if (\is_array($this->rowValue)) {
            Model::validateArray($this->rowValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rowValue) {
            if (\is_array($this->rowValue)) {
                $res['RowValue'] = [];
                $n1 = 0;
                foreach ($this->rowValue as $item1) {
                    $res['RowValue'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RowValue'])) {
            if (!empty($map['RowValue'])) {
                $model->rowValue = [];
                $n1 = 0;
                foreach ($map['RowValue'] as $item1) {
                    $model->rowValue[$n1] = rowValue::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
