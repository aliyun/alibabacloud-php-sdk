<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Addresspurification\V20191118\Models;

use AlibabaCloud\Tea\Model;

class GetAddressDivisionCodeRequest extends Model
{
    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $defaultProvince;

    /**
     * @var string
     */
    public $defaultCity;

    /**
     * @var string
     */
    public $defaultDistrict;

    /**
     * @var string
     */
    public $appKey;
    protected $_name = [
        'serviceCode'     => 'ServiceCode',
        'text'            => 'Text',
        'defaultProvince' => 'DefaultProvince',
        'defaultCity'     => 'DefaultCity',
        'defaultDistrict' => 'DefaultDistrict',
        'appKey'          => 'AppKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->defaultProvince) {
            $res['DefaultProvince'] = $this->defaultProvince;
        }
        if (null !== $this->defaultCity) {
            $res['DefaultCity'] = $this->defaultCity;
        }
        if (null !== $this->defaultDistrict) {
            $res['DefaultDistrict'] = $this->defaultDistrict;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAddressDivisionCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['DefaultProvince'])) {
            $model->defaultProvince = $map['DefaultProvince'];
        }
        if (isset($map['DefaultCity'])) {
            $model->defaultCity = $map['DefaultCity'];
        }
        if (isset($map['DefaultDistrict'])) {
            $model->defaultDistrict = $map['DefaultDistrict'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        return $model;
    }
}
