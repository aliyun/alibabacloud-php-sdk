<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryChildDivisionCodeByIdResponseBody\model;

use AlibabaCloud\Tea\Model;

class divisionList extends Model
{
    /**
     * @var int
     */
    public $divisionCode;

    /**
     * @var int
     */
    public $divisionLevel;

    /**
     * @var string
     */
    public $divisionName;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var string
     */
    public $pinyin;
    protected $_name = [
        'divisionCode'  => 'DivisionCode',
        'divisionLevel' => 'DivisionLevel',
        'divisionName'  => 'DivisionName',
        'parentId'      => 'ParentId',
        'pinyin'        => 'Pinyin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->divisionCode) {
            $res['DivisionCode'] = $this->divisionCode;
        }
        if (null !== $this->divisionLevel) {
            $res['DivisionLevel'] = $this->divisionLevel;
        }
        if (null !== $this->divisionName) {
            $res['DivisionName'] = $this->divisionName;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->pinyin) {
            $res['Pinyin'] = $this->pinyin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return divisionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DivisionCode'])) {
            $model->divisionCode = $map['DivisionCode'];
        }
        if (isset($map['DivisionLevel'])) {
            $model->divisionLevel = $map['DivisionLevel'];
        }
        if (isset($map['DivisionName'])) {
            $model->divisionName = $map['DivisionName'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Pinyin'])) {
            $model->pinyin = $map['Pinyin'];
        }

        return $model;
    }
}
