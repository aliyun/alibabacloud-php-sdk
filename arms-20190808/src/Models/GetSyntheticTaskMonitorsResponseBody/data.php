<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskMonitorsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The task status.
     *
     *   0: active
     *   1: busy
     *
     * @example 0
     *
     * @var int
     */
    public $busy;

    /**
     * @description The name of the city to which the monitoring point belongs.
     *
     * @example Beijing
     *
     * @var string
     */
    public $city;

    /**
     * @description The ID of the city to which the monitoring point belongs.
     *
     * @example 1100101
     *
     * @var int
     */
    public $cityCode;

    /**
     * @description The client type:
     *
     *   1: IDC
     *   2: Last mile
     *
     * @example 1
     *
     * @var int
     */
    public $clientType;

    /**
     * @description The region to which the monitoring point belongs.
     *
     * @example Beijing
     *
     * @var string
     */
    public $district;

    /**
     * @description The ID of the carrier.
     *
     * @example 18
     *
     * @var int
     */
    public $netServiceId;

    /**
     * @description The name of the carrier.
     *
     * @example XXX
     *
     * @var string
     */
    public $netServiceName;
    protected $_name = [
        'busy'           => 'Busy',
        'city'           => 'City',
        'cityCode'       => 'CityCode',
        'clientType'     => 'ClientType',
        'district'       => 'District',
        'netServiceId'   => 'NetServiceId',
        'netServiceName' => 'NetServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->busy) {
            $res['Busy'] = $this->busy;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->cityCode) {
            $res['CityCode'] = $this->cityCode;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->district) {
            $res['District'] = $this->district;
        }
        if (null !== $this->netServiceId) {
            $res['NetServiceId'] = $this->netServiceId;
        }
        if (null !== $this->netServiceName) {
            $res['NetServiceName'] = $this->netServiceName;
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
        if (isset($map['Busy'])) {
            $model->busy = $map['Busy'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['CityCode'])) {
            $model->cityCode = $map['CityCode'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['District'])) {
            $model->district = $map['District'];
        }
        if (isset($map['NetServiceId'])) {
            $model->netServiceId = $map['NetServiceId'];
        }
        if (isset($map['NetServiceName'])) {
            $model->netServiceName = $map['NetServiceName'];
        }

        return $model;
    }
}
