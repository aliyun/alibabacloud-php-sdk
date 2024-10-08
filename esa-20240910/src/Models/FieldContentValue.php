<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\FieldContentValue\fieldList;
use AlibabaCloud\Tea\Model;

class FieldContentValue extends Model
{
    /**
     * @example 1
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->fieldList) {
            $res['FieldList'] = [];
            if (null !== $this->fieldList && \is_array($this->fieldList)) {
                $n = 0;
                foreach ($this->fieldList as $item) {
                    $res['FieldList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FieldContentValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['FieldList'])) {
            if (!empty($map['FieldList'])) {
                $model->fieldList = [];
                $n                = 0;
                foreach ($map['FieldList'] as $item) {
                    $model->fieldList[$n++] = null !== $item ? fieldList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
