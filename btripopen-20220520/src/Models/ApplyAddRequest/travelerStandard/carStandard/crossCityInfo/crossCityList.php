<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\travelerStandard\carStandard\crossCityInfo;

use AlibabaCloud\Dara\Model;

class crossCityList extends Model
{
    /**
     * @var string
     */
    public $fromAdcode;

    /**
     * @var string
     */
    public $fromCityCode;

    /**
     * @var string
     */
    public $fromCityName;

    /**
     * @var string
     */
    public $toAdcode;

    /**
     * @var string
     */
    public $toCityCode;

    /**
     * @var string
     */
    public $toCityName;
    protected $_name = [
        'fromAdcode' => 'from_adcode',
        'fromCityCode' => 'from_city_code',
        'fromCityName' => 'from_city_name',
        'toAdcode' => 'to_adcode',
        'toCityCode' => 'to_city_code',
        'toCityName' => 'to_city_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromAdcode) {
            $res['from_adcode'] = $this->fromAdcode;
        }

        if (null !== $this->fromCityCode) {
            $res['from_city_code'] = $this->fromCityCode;
        }

        if (null !== $this->fromCityName) {
            $res['from_city_name'] = $this->fromCityName;
        }

        if (null !== $this->toAdcode) {
            $res['to_adcode'] = $this->toAdcode;
        }

        if (null !== $this->toCityCode) {
            $res['to_city_code'] = $this->toCityCode;
        }

        if (null !== $this->toCityName) {
            $res['to_city_name'] = $this->toCityName;
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
        if (isset($map['from_adcode'])) {
            $model->fromAdcode = $map['from_adcode'];
        }

        if (isset($map['from_city_code'])) {
            $model->fromCityCode = $map['from_city_code'];
        }

        if (isset($map['from_city_name'])) {
            $model->fromCityName = $map['from_city_name'];
        }

        if (isset($map['to_adcode'])) {
            $model->toAdcode = $map['to_adcode'];
        }

        if (isset($map['to_city_code'])) {
            $model->toCityCode = $map['to_city_code'];
        }

        if (isset($map['to_city_name'])) {
            $model->toCityName = $map['to_city_name'];
        }

        return $model;
    }
}
