<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\ListAreasResponseBody;

use AlibabaCloud\SDK\Trademark\V20190902\Models\ListAreasResponseBody\datas\subArea;
use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentCode;

    /**
     * @var int
     */
    public $sortNum;

    /**
     * @var subArea[]
     */
    public $subArea;
    protected $_name = [
        'code'       => 'Code',
        'name'       => 'Name',
        'parentCode' => 'ParentCode',
        'sortNum'    => 'SortNum',
        'subArea'    => 'SubArea',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentCode) {
            $res['ParentCode'] = $this->parentCode;
        }
        if (null !== $this->sortNum) {
            $res['SortNum'] = $this->sortNum;
        }
        if (null !== $this->subArea) {
            $res['SubArea'] = [];
            if (null !== $this->subArea && \is_array($this->subArea)) {
                $n = 0;
                foreach ($this->subArea as $item) {
                    $res['SubArea'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentCode'])) {
            $model->parentCode = $map['ParentCode'];
        }
        if (isset($map['SortNum'])) {
            $model->sortNum = $map['SortNum'];
        }
        if (isset($map['SubArea'])) {
            if (!empty($map['SubArea'])) {
                $model->subArea = [];
                $n              = 0;
                foreach ($map['SubArea'] as $item) {
                    $model->subArea[$n++] = null !== $item ? subArea::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
