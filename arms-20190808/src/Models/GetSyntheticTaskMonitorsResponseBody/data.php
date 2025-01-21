<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskMonitorsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $busy;
    /**
     * @var string
     */
    public $city;
    /**
     * @var int
     */
    public $cityCode;
    /**
     * @var int
     */
    public $clientType;
    /**
     * @var string
     */
    public $district;
    /**
     * @var int
     */
    public $netServiceId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
