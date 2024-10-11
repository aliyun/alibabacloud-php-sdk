<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SuperappNlp\V20240930\Models;

use AlibabaCloud\Tea\Model;

class NlpAddressNormalizationRequest extends Model
{
    /**
     * @var string
     */
    public $cityStdManual;

    /**
     * @example BACOLOR
     *
     * @var string
     */
    public $cityStr;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $districtStdManual;

    /**
     * @example 10671
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $provinceStdManual;

    /**
     * @example PAMPANGA
     *
     * @var string
     */
    public $provinceStr;

    /**
     * @example 350 Magliman, Bacolor, Pampanga AQUA MALTA Refilling Station
     *
     * @var string
     */
    public $queryStr;
    protected $_name = [
        'cityStdManual'     => 'CityStdManual',
        'cityStr'           => 'CityStr',
        'clientToken'       => 'ClientToken',
        'districtStdManual' => 'DistrictStdManual',
        'instanceId'        => 'InstanceId',
        'provinceStdManual' => 'ProvinceStdManual',
        'provinceStr'       => 'ProvinceStr',
        'queryStr'          => 'QueryStr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cityStdManual) {
            $res['CityStdManual'] = $this->cityStdManual;
        }
        if (null !== $this->cityStr) {
            $res['CityStr'] = $this->cityStr;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->districtStdManual) {
            $res['DistrictStdManual'] = $this->districtStdManual;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->provinceStdManual) {
            $res['ProvinceStdManual'] = $this->provinceStdManual;
        }
        if (null !== $this->provinceStr) {
            $res['ProvinceStr'] = $this->provinceStr;
        }
        if (null !== $this->queryStr) {
            $res['QueryStr'] = $this->queryStr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NlpAddressNormalizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CityStdManual'])) {
            $model->cityStdManual = $map['CityStdManual'];
        }
        if (isset($map['CityStr'])) {
            $model->cityStr = $map['CityStr'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DistrictStdManual'])) {
            $model->districtStdManual = $map['DistrictStdManual'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProvinceStdManual'])) {
            $model->provinceStdManual = $map['ProvinceStdManual'];
        }
        if (isset($map['ProvinceStr'])) {
            $model->provinceStr = $map['ProvinceStr'];
        }
        if (isset($map['QueryStr'])) {
            $model->queryStr = $map['QueryStr'];
        }

        return $model;
    }
}
