<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Addresspurification\V20191118\Models;

use AlibabaCloud\Tea\Model;

class ExtractAddressRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;

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
    public $defaultProvince;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'appKey'          => 'AppKey',
        'defaultCity'     => 'DefaultCity',
        'defaultDistrict' => 'DefaultDistrict',
        'defaultProvince' => 'DefaultProvince',
        'serviceCode'     => 'ServiceCode',
        'text'            => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->defaultCity) {
            $res['DefaultCity'] = $this->defaultCity;
        }
        if (null !== $this->defaultDistrict) {
            $res['DefaultDistrict'] = $this->defaultDistrict;
        }
        if (null !== $this->defaultProvince) {
            $res['DefaultProvince'] = $this->defaultProvince;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExtractAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['DefaultCity'])) {
            $model->defaultCity = $map['DefaultCity'];
        }
        if (isset($map['DefaultDistrict'])) {
            $model->defaultDistrict = $map['DefaultDistrict'];
        }
        if (isset($map['DefaultProvince'])) {
            $model->defaultProvince = $map['DefaultProvince'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
