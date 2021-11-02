<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAllCitiesResponseBody\cities;

use AlibabaCloud\Tea\Model;

class city extends Model
{
    /**
     * @var int
     */
    public $cityCode;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var string
     */
    public $pinYin;
    protected $_name = [
        'cityCode' => 'CityCode',
        'id'       => 'Id',
        'name'     => 'Name',
        'parentId' => 'ParentId',
        'pinYin'   => 'PinYin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityCode) {
            $res['CityCode'] = $this->cityCode;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->pinYin) {
            $res['PinYin'] = $this->pinYin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return city
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CityCode'])) {
            $model->cityCode = $map['CityCode'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['PinYin'])) {
            $model->pinYin = $map['PinYin'];
        }

        return $model;
    }
}
