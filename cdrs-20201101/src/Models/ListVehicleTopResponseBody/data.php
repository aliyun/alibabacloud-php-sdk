<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListVehicleTopResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2286049969284580096
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 1
     *
     * @var string
     */
    public $frequency;

    /**
     * @example 18
     *
     * @var string
     */
    public $passHour;

    /**
     * @example 123456
     *
     * @var string
     */
    public $poiId;

    /**
     * @var string
     */
    public $poiName;

    /**
     * @var string
     */
    public $vehicleId;
    protected $_name = [
        'corpId'    => 'CorpId',
        'frequency' => 'Frequency',
        'passHour'  => 'PassHour',
        'poiId'     => 'PoiId',
        'poiName'   => 'PoiName',
        'vehicleId' => 'VehicleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->passHour) {
            $res['PassHour'] = $this->passHour;
        }
        if (null !== $this->poiId) {
            $res['PoiId'] = $this->poiId;
        }
        if (null !== $this->poiName) {
            $res['PoiName'] = $this->poiName;
        }
        if (null !== $this->vehicleId) {
            $res['VehicleId'] = $this->vehicleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['PassHour'])) {
            $model->passHour = $map['PassHour'];
        }
        if (isset($map['PoiId'])) {
            $model->poiId = $map['PoiId'];
        }
        if (isset($map['PoiName'])) {
            $model->poiName = $map['PoiName'];
        }
        if (isset($map['VehicleId'])) {
            $model->vehicleId = $map['VehicleId'];
        }

        return $model;
    }
}
