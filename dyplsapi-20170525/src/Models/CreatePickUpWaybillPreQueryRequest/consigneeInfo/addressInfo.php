<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryRequest\consigneeInfo;

use AlibabaCloud\Tea\Model;

class addressInfo extends Model
{
    /**
     * @var string
     */
    public $addressDetail;

    /**
     * @var string
     */
    public $areaName;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $provinceName;

    /**
     * @var string
     */
    public $townName;
    protected $_name = [
        'addressDetail' => 'AddressDetail',
        'areaName'      => 'AreaName',
        'cityName'      => 'CityName',
        'provinceName'  => 'ProvinceName',
        'townName'      => 'TownName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressDetail) {
            $res['AddressDetail'] = $this->addressDetail;
        }
        if (null !== $this->areaName) {
            $res['AreaName'] = $this->areaName;
        }
        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }
        if (null !== $this->provinceName) {
            $res['ProvinceName'] = $this->provinceName;
        }
        if (null !== $this->townName) {
            $res['TownName'] = $this->townName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addressInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressDetail'])) {
            $model->addressDetail = $map['AddressDetail'];
        }
        if (isset($map['AreaName'])) {
            $model->areaName = $map['AreaName'];
        }
        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }
        if (isset($map['ProvinceName'])) {
            $model->provinceName = $map['ProvinceName'];
        }
        if (isset($map['TownName'])) {
            $model->townName = $map['TownName'];
        }

        return $model;
    }
}
