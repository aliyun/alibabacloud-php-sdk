<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryAccountDeliveryAddressInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class townDivision extends Model
{
    /**
     * @var string
     */
    public $divisionAbbName;

    /**
     * @var int
     */
    public $divisionId;

    /**
     * @var int
     */
    public $divisionLevel;

    /**
     * @var string
     */
    public $divisionName;

    /**
     * @var string
     */
    public $divisionTname;

    /**
     * @var int
     */
    public $newDivisionId;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var string
     */
    public $pinyin;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'divisionAbbName' => 'DivisionAbbName',
        'divisionId' => 'DivisionId',
        'divisionLevel' => 'DivisionLevel',
        'divisionName' => 'DivisionName',
        'divisionTname' => 'DivisionTname',
        'newDivisionId' => 'NewDivisionId',
        'parentId' => 'ParentId',
        'pinyin' => 'Pinyin',
        'remark' => 'Remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->divisionAbbName) {
            $res['DivisionAbbName'] = $this->divisionAbbName;
        }

        if (null !== $this->divisionId) {
            $res['DivisionId'] = $this->divisionId;
        }

        if (null !== $this->divisionLevel) {
            $res['DivisionLevel'] = $this->divisionLevel;
        }

        if (null !== $this->divisionName) {
            $res['DivisionName'] = $this->divisionName;
        }

        if (null !== $this->divisionTname) {
            $res['DivisionTname'] = $this->divisionTname;
        }

        if (null !== $this->newDivisionId) {
            $res['NewDivisionId'] = $this->newDivisionId;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->pinyin) {
            $res['Pinyin'] = $this->pinyin;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['DivisionAbbName'])) {
            $model->divisionAbbName = $map['DivisionAbbName'];
        }

        if (isset($map['DivisionId'])) {
            $model->divisionId = $map['DivisionId'];
        }

        if (isset($map['DivisionLevel'])) {
            $model->divisionLevel = $map['DivisionLevel'];
        }

        if (isset($map['DivisionName'])) {
            $model->divisionName = $map['DivisionName'];
        }

        if (isset($map['DivisionTname'])) {
            $model->divisionTname = $map['DivisionTname'];
        }

        if (isset($map['NewDivisionId'])) {
            $model->newDivisionId = $map['NewDivisionId'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['Pinyin'])) {
            $model->pinyin = $map['Pinyin'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
