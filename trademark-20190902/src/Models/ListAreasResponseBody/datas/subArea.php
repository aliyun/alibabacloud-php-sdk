<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\ListAreasResponseBody\datas;

use AlibabaCloud\Tea\Model;

class subArea extends Model
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
    protected $_name = [
        'code'       => 'Code',
        'name'       => 'Name',
        'parentCode' => 'ParentCode',
        'sortNum'    => 'SortNum',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subArea
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

        return $model;
    }
}
