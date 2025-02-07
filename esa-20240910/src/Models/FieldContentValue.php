<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\FieldContentValue\fieldList;

class FieldContentValue extends Model
{
    /**
     * @var int
     */
    public $sortOrder;
    /**
     * @var fieldList[]
     */
    public $fieldList;
    protected $_name = [
        'sortOrder' => 'SortOrder',
        'fieldList' => 'FieldList',
    ];

    public function validate()
    {
        if (\is_array($this->fieldList)) {
            Model::validateArray($this->fieldList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }

        if (null !== $this->fieldList) {
            if (\is_array($this->fieldList)) {
                $res['FieldList'] = [];
                $n1               = 0;
                foreach ($this->fieldList as $item1) {
                    $res['FieldList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        if (isset($map['FieldList'])) {
            if (!empty($map['FieldList'])) {
                $model->fieldList = [];
                $n1               = 0;
                foreach ($map['FieldList'] as $item1) {
                    $model->fieldList[$n1++] = fieldList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
