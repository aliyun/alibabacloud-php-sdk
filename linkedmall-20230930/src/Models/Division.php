<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class Division extends Model
{
    /**
     * @example 310000
     *
     * @var int
     */
    public $divisionCode;

    /**
     * @example 2
     *
     * @var int
     */
    public $divisionLevel;

    /**
     * @example 上海
     *
     * @var string
     */
    public $divisionName;

    /**
     * @example 1
     *
     * @var int
     */
    public $parentId;

    /**
     * @example shang hai
     *
     * @var string
     */
    public $pinyin;
    protected $_name = [
        'divisionCode'  => 'divisionCode',
        'divisionLevel' => 'divisionLevel',
        'divisionName'  => 'divisionName',
        'parentId'      => 'parentId',
        'pinyin'        => 'pinyin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->divisionCode) {
            $res['divisionCode'] = $this->divisionCode;
        }
        if (null !== $this->divisionLevel) {
            $res['divisionLevel'] = $this->divisionLevel;
        }
        if (null !== $this->divisionName) {
            $res['divisionName'] = $this->divisionName;
        }
        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }
        if (null !== $this->pinyin) {
            $res['pinyin'] = $this->pinyin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Division
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['divisionCode'])) {
            $model->divisionCode = $map['divisionCode'];
        }
        if (isset($map['divisionLevel'])) {
            $model->divisionLevel = $map['divisionLevel'];
        }
        if (isset($map['divisionName'])) {
            $model->divisionName = $map['divisionName'];
        }
        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }
        if (isset($map['pinyin'])) {
            $model->pinyin = $map['pinyin'];
        }

        return $model;
    }
}
