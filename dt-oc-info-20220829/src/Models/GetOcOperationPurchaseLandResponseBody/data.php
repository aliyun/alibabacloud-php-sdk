<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcOperationPurchaseLandResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1.0148
     *
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $department;

    /**
     * @example 3708322017B00230
     *
     * @var string
     */
    public $electronicNo;

    /**
     * @var string
     */
    public $entName;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var string
     */
    public $landLevel;

    /**
     * @var string
     */
    public $landSource;

    /**
     * @var string
     */
    public $landUse;

    /**
     * @var string
     */
    public $location;

    /**
     * @example 1964.0
     *
     * @var string
     */
    public $price;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @example 2017-04-26
     *
     * @var string
     */
    public $promiseDeliveryDate;

    /**
     * @example 2020-10-11
     *
     * @var string
     */
    public $promiseEndDate;

    /**
     * @example 2017-10-11
     *
     * @var string
     */
    public $promiseStartDate;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @example 2017-04-11
     *
     * @var string
     */
    public $releaseDate;

    /**
     * @var string
     */
    public $signingMode;

    /**
     * @var string
     */
    public $useYear;

    /**
     * @example 2.5
     *
     * @var string
     */
    public $volumeFractionLowerBound;

    /**
     * @example 2.87
     *
     * @var string
     */
    public $volumeFractionUpperBound;
    protected $_name = [
        'area'                     => 'Area',
        'department'               => 'Department',
        'electronicNo'             => 'ElectronicNo',
        'entName'                  => 'EntName',
        'industry'                 => 'Industry',
        'landLevel'                => 'LandLevel',
        'landSource'               => 'LandSource',
        'landUse'                  => 'LandUse',
        'location'                 => 'Location',
        'price'                    => 'Price',
        'projectName'              => 'ProjectName',
        'promiseDeliveryDate'      => 'PromiseDeliveryDate',
        'promiseEndDate'           => 'PromiseEndDate',
        'promiseStartDate'         => 'PromiseStartDate',
        'regionName'               => 'RegionName',
        'releaseDate'              => 'ReleaseDate',
        'signingMode'              => 'SigningMode',
        'useYear'                  => 'UseYear',
        'volumeFractionLowerBound' => 'VolumeFractionLowerBound',
        'volumeFractionUpperBound' => 'VolumeFractionUpperBound',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }
        if (null !== $this->electronicNo) {
            $res['ElectronicNo'] = $this->electronicNo;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }
        if (null !== $this->landLevel) {
            $res['LandLevel'] = $this->landLevel;
        }
        if (null !== $this->landSource) {
            $res['LandSource'] = $this->landSource;
        }
        if (null !== $this->landUse) {
            $res['LandUse'] = $this->landUse;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->promiseDeliveryDate) {
            $res['PromiseDeliveryDate'] = $this->promiseDeliveryDate;
        }
        if (null !== $this->promiseEndDate) {
            $res['PromiseEndDate'] = $this->promiseEndDate;
        }
        if (null !== $this->promiseStartDate) {
            $res['PromiseStartDate'] = $this->promiseStartDate;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->releaseDate) {
            $res['ReleaseDate'] = $this->releaseDate;
        }
        if (null !== $this->signingMode) {
            $res['SigningMode'] = $this->signingMode;
        }
        if (null !== $this->useYear) {
            $res['UseYear'] = $this->useYear;
        }
        if (null !== $this->volumeFractionLowerBound) {
            $res['VolumeFractionLowerBound'] = $this->volumeFractionLowerBound;
        }
        if (null !== $this->volumeFractionUpperBound) {
            $res['VolumeFractionUpperBound'] = $this->volumeFractionUpperBound;
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
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }
        if (isset($map['ElectronicNo'])) {
            $model->electronicNo = $map['ElectronicNo'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }
        if (isset($map['LandLevel'])) {
            $model->landLevel = $map['LandLevel'];
        }
        if (isset($map['LandSource'])) {
            $model->landSource = $map['LandSource'];
        }
        if (isset($map['LandUse'])) {
            $model->landUse = $map['LandUse'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['PromiseDeliveryDate'])) {
            $model->promiseDeliveryDate = $map['PromiseDeliveryDate'];
        }
        if (isset($map['PromiseEndDate'])) {
            $model->promiseEndDate = $map['PromiseEndDate'];
        }
        if (isset($map['PromiseStartDate'])) {
            $model->promiseStartDate = $map['PromiseStartDate'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['ReleaseDate'])) {
            $model->releaseDate = $map['ReleaseDate'];
        }
        if (isset($map['SigningMode'])) {
            $model->signingMode = $map['SigningMode'];
        }
        if (isset($map['UseYear'])) {
            $model->useYear = $map['UseYear'];
        }
        if (isset($map['VolumeFractionLowerBound'])) {
            $model->volumeFractionLowerBound = $map['VolumeFractionLowerBound'];
        }
        if (isset($map['VolumeFractionUpperBound'])) {
            $model->volumeFractionUpperBound = $map['VolumeFractionUpperBound'];
        }

        return $model;
    }
}
