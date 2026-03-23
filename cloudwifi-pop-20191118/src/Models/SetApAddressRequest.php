<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class SetApAddressRequest extends Model
{
    /**
     * @var string
     */
    public $apAreaName;

    /**
     * @var string
     */
    public $apBuildingName;

    /**
     * @var string
     */
    public $apCampusName;

    /**
     * @var string
     */
    public $apCityName;

    /**
     * @var string
     */
    public $apFloor;

    /**
     * @var string
     */
    public $apGroup;

    /**
     * @var string
     */
    public $apName;

    /**
     * @var string
     */
    public $apNationName;

    /**
     * @var string
     */
    public $apProvinceName;

    /**
     * @var int
     */
    public $apUnitId;

    /**
     * @var string
     */
    public $apUnitName;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $lat;

    /**
     * @var string
     */
    public $lng;

    /**
     * @var string
     */
    public $mac;
    protected $_name = [
        'apAreaName' => 'ApAreaName',
        'apBuildingName' => 'ApBuildingName',
        'apCampusName' => 'ApCampusName',
        'apCityName' => 'ApCityName',
        'apFloor' => 'ApFloor',
        'apGroup' => 'ApGroup',
        'apName' => 'ApName',
        'apNationName' => 'ApNationName',
        'apProvinceName' => 'ApProvinceName',
        'apUnitId' => 'ApUnitId',
        'apUnitName' => 'ApUnitName',
        'appCode' => 'AppCode',
        'appName' => 'AppName',
        'direction' => 'Direction',
        'language' => 'Language',
        'lat' => 'Lat',
        'lng' => 'Lng',
        'mac' => 'Mac',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apAreaName) {
            $res['ApAreaName'] = $this->apAreaName;
        }

        if (null !== $this->apBuildingName) {
            $res['ApBuildingName'] = $this->apBuildingName;
        }

        if (null !== $this->apCampusName) {
            $res['ApCampusName'] = $this->apCampusName;
        }

        if (null !== $this->apCityName) {
            $res['ApCityName'] = $this->apCityName;
        }

        if (null !== $this->apFloor) {
            $res['ApFloor'] = $this->apFloor;
        }

        if (null !== $this->apGroup) {
            $res['ApGroup'] = $this->apGroup;
        }

        if (null !== $this->apName) {
            $res['ApName'] = $this->apName;
        }

        if (null !== $this->apNationName) {
            $res['ApNationName'] = $this->apNationName;
        }

        if (null !== $this->apProvinceName) {
            $res['ApProvinceName'] = $this->apProvinceName;
        }

        if (null !== $this->apUnitId) {
            $res['ApUnitId'] = $this->apUnitId;
        }

        if (null !== $this->apUnitName) {
            $res['ApUnitName'] = $this->apUnitName;
        }

        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->lat) {
            $res['Lat'] = $this->lat;
        }

        if (null !== $this->lng) {
            $res['Lng'] = $this->lng;
        }

        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
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
        if (isset($map['ApAreaName'])) {
            $model->apAreaName = $map['ApAreaName'];
        }

        if (isset($map['ApBuildingName'])) {
            $model->apBuildingName = $map['ApBuildingName'];
        }

        if (isset($map['ApCampusName'])) {
            $model->apCampusName = $map['ApCampusName'];
        }

        if (isset($map['ApCityName'])) {
            $model->apCityName = $map['ApCityName'];
        }

        if (isset($map['ApFloor'])) {
            $model->apFloor = $map['ApFloor'];
        }

        if (isset($map['ApGroup'])) {
            $model->apGroup = $map['ApGroup'];
        }

        if (isset($map['ApName'])) {
            $model->apName = $map['ApName'];
        }

        if (isset($map['ApNationName'])) {
            $model->apNationName = $map['ApNationName'];
        }

        if (isset($map['ApProvinceName'])) {
            $model->apProvinceName = $map['ApProvinceName'];
        }

        if (isset($map['ApUnitId'])) {
            $model->apUnitId = $map['ApUnitId'];
        }

        if (isset($map['ApUnitName'])) {
            $model->apUnitName = $map['ApUnitName'];
        }

        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Lat'])) {
            $model->lat = $map['Lat'];
        }

        if (isset($map['Lng'])) {
            $model->lng = $map['Lng'];
        }

        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }

        return $model;
    }
}
