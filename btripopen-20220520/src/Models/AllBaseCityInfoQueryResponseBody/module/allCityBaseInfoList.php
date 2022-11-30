<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\AllBaseCityInfoQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class allCityBaseInfoList extends Model
{
    /**
     * @var string
     */
    public $adcode;

    /**
     * @var string
     */
    public $cityCode;

    /**
     * @var string
     */
    public $cityLevel;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $cnNameTree;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $otherNameList;
    protected $_name = [
        'adcode'        => 'adcode',
        'cityCode'      => 'city_code',
        'cityLevel'     => 'city_level',
        'cityName'      => 'city_name',
        'cnNameTree'    => 'cn_name_tree',
        'id'            => 'id',
        'otherNameList' => 'other_name_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adcode) {
            $res['adcode'] = $this->adcode;
        }
        if (null !== $this->cityCode) {
            $res['city_code'] = $this->cityCode;
        }
        if (null !== $this->cityLevel) {
            $res['city_level'] = $this->cityLevel;
        }
        if (null !== $this->cityName) {
            $res['city_name'] = $this->cityName;
        }
        if (null !== $this->cnNameTree) {
            $res['cn_name_tree'] = $this->cnNameTree;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->otherNameList) {
            $res['other_name_list'] = $this->otherNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allCityBaseInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['adcode'])) {
            $model->adcode = $map['adcode'];
        }
        if (isset($map['city_code'])) {
            $model->cityCode = $map['city_code'];
        }
        if (isset($map['city_level'])) {
            $model->cityLevel = $map['city_level'];
        }
        if (isset($map['city_name'])) {
            $model->cityName = $map['city_name'];
        }
        if (isset($map['cn_name_tree'])) {
            $model->cnNameTree = $map['cn_name_tree'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['other_name_list'])) {
            if (!empty($map['other_name_list'])) {
                $model->otherNameList = $map['other_name_list'];
            }
        }

        return $model;
    }
}
