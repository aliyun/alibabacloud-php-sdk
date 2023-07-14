<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail;

use AlibabaCloud\Tea\Model;

class monitorList extends Model
{
    /**
     * @description 城市编码。
     *
     * @var int
     */
    public $cityCode;

    /**
     * @var int
     */
    public $monitorType;

    /**
     * @var int
     */
    public $netServiceId;

    /**
     * @var int
     */
    public $sendCount;
    protected $_name = [
        'cityCode'     => 'CityCode',
        'monitorType'  => 'MonitorType',
        'netServiceId' => 'NetServiceId',
        'sendCount'    => 'SendCount',
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
        if (null !== $this->sendCount) {
            $res['SendCount'] = $this->sendCount;
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
        if (isset($map['SendCount'])) {
            $model->sendCount = $map['SendCount'];
        }

        return $model;
    }
}
