<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeMetaSearchPageListResponseBody\items;

use AlibabaCloud\Dara\Model;

class request extends Model
{
    /**
     * @var string
     */
    public $vehicleNum;

    /**
     * @var string
     */
    public $vehicleType;

    /**
     * @var string
     */
    public $vehicleTypeName;
    protected $_name = [
        'vehicleNum' => 'VehicleNum',
        'vehicleType' => 'VehicleType',
        'vehicleTypeName' => 'VehicleTypeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vehicleNum) {
            $res['VehicleNum'] = $this->vehicleNum;
        }

        if (null !== $this->vehicleType) {
            $res['VehicleType'] = $this->vehicleType;
        }

        if (null !== $this->vehicleTypeName) {
            $res['VehicleTypeName'] = $this->vehicleTypeName;
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
        if (isset($map['VehicleNum'])) {
            $model->vehicleNum = $map['VehicleNum'];
        }

        if (isset($map['VehicleType'])) {
            $model->vehicleType = $map['VehicleType'];
        }

        if (isset($map['VehicleTypeName'])) {
            $model->vehicleTypeName = $map['VehicleTypeName'];
        }

        return $model;
    }
}
