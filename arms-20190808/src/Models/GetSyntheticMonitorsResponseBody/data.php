<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticMonitorsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var string
     */
    public $available;

    /**
     * @example true
     *
     * @var bool
     */
    public $canBeSelected;

    /**
     * @var string
     */
    public $city;

    /**
     * @example 1100101
     *
     * @var string
     */
    public $cityCode;

    /**
     * @example 1
     *
     * @var int
     */
    public $clientType;

    /**
     * @var string
     */
    public $country;

    /**
     * @example 0
     *
     * @var int
     */
    public $ipv6;

    /**
     * @var string
     */
    public $operator;

    /**
     * @example 1
     *
     * @var string
     */
    public $operatorCode;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'available'     => 'Available',
        'canBeSelected' => 'CanBeSelected',
        'city'          => 'City',
        'cityCode'      => 'CityCode',
        'clientType'    => 'ClientType',
        'country'       => 'Country',
        'ipv6'          => 'Ipv6',
        'operator'      => 'Operator',
        'operatorCode'  => 'OperatorCode',
        'region'        => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }
        if (null !== $this->canBeSelected) {
            $res['CanBeSelected'] = $this->canBeSelected;
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
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->ipv6) {
            $res['Ipv6'] = $this->ipv6;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->operatorCode) {
            $res['OperatorCode'] = $this->operatorCode;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }
        if (isset($map['CanBeSelected'])) {
            $model->canBeSelected = $map['CanBeSelected'];
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
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Ipv6'])) {
            $model->ipv6 = $map['Ipv6'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['OperatorCode'])) {
            $model->operatorCode = $map['OperatorCode'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
