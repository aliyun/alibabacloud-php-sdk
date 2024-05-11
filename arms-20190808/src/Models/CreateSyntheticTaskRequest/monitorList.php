<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest;

use AlibabaCloud\Tea\Model;

class monitorList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1100101
     *
     * @var int
     */
    public $cityCode;

    /**
     * @description This parameter is required.
     *
     * @example IDC
     *
     * @var int
     */
    public $monitorType;

    /**
     * @description This parameter is required.
     *
     * @example 18
     *
     * @var int
     */
    public $netServiceId;
    protected $_name = [
        'cityCode'     => 'CityCode',
        'monitorType'  => 'MonitorType',
        'netServiceId' => 'NetServiceId',
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
        if (null !== $this->monitorType) {
            $res['MonitorType'] = $this->monitorType;
        }
        if (null !== $this->netServiceId) {
            $res['NetServiceId'] = $this->netServiceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CityCode'])) {
            $model->cityCode = $map['CityCode'];
        }
        if (isset($map['MonitorType'])) {
            $model->monitorType = $map['MonitorType'];
        }
        if (isset($map['NetServiceId'])) {
            $model->netServiceId = $map['NetServiceId'];
        }

        return $model;
    }
}
