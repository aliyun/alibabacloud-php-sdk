<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelSearchCityPageResponseBody\data;

use AlibabaCloud\Dara\Model;

class cities extends Model
{
    /**
     * @var string
     */
    public $cnName;

    /**
     * @var int
     */
    public $code;

    /**
     * @var int
     */
    public $country;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $enName;

    /**
     * @var int
     */
    public $level;

    /**
     * @var int
     */
    public $parentCode;

    /**
     * @var int
     */
    public $region;
    protected $_name = [
        'cnName' => 'CnName',
        'code' => 'Code',
        'country' => 'Country',
        'countryCode' => 'CountryCode',
        'enName' => 'EnName',
        'level' => 'Level',
        'parentCode' => 'ParentCode',
        'region' => 'Region',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cnName) {
            $res['CnName'] = $this->cnName;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }

        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }

        if (null !== $this->enName) {
            $res['EnName'] = $this->enName;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->parentCode) {
            $res['ParentCode'] = $this->parentCode;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['CnName'])) {
            $model->cnName = $map['CnName'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }

        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }

        if (isset($map['EnName'])) {
            $model->enName = $map['EnName'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['ParentCode'])) {
            $model->parentCode = $map['ParentCode'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
