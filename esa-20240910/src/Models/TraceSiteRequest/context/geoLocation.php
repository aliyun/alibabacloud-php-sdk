<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\TraceSiteRequest\context;

use AlibabaCloud\Dara\Model;

class geoLocation extends Model
{
    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $ispCode;

    /**
     * @var string
     */
    public $regionCode;
    protected $_name = [
        'countryCode' => 'CountryCode',
        'ispCode' => 'IspCode',
        'regionCode' => 'RegionCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }

        if (null !== $this->ispCode) {
            $res['IspCode'] = $this->ispCode;
        }

        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
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
        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }

        if (isset($map['IspCode'])) {
            $model->ispCode = $map['IspCode'];
        }

        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }

        return $model;
    }
}
