<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListOutboundNumbersOfUserResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @example 0830019****
     *
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $provider;

    /**
     * @deprecated
     *
     * @var string
     */
    public $providerCode;

    /**
     * @deprecated
     *
     * @var string
     */
    public $providerDisplayName;

    /**
     * @var string
     */
    public $providerShortName;

    /**
     * @var string
     */
    public $providerType;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'city' => 'City',
        'number' => 'Number',
        'provider' => 'Provider',
        'providerCode' => 'ProviderCode',
        'providerDisplayName' => 'ProviderDisplayName',
        'providerShortName' => 'ProviderShortName',
        'providerType' => 'ProviderType',
        'province' => 'Province',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->providerCode) {
            $res['ProviderCode'] = $this->providerCode;
        }
        if (null !== $this->providerDisplayName) {
            $res['ProviderDisplayName'] = $this->providerDisplayName;
        }
        if (null !== $this->providerShortName) {
            $res['ProviderShortName'] = $this->providerShortName;
        }
        if (null !== $this->providerType) {
            $res['ProviderType'] = $this->providerType;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['ProviderCode'])) {
            $model->providerCode = $map['ProviderCode'];
        }
        if (isset($map['ProviderDisplayName'])) {
            $model->providerDisplayName = $map['ProviderDisplayName'];
        }
        if (isset($map['ProviderShortName'])) {
            $model->providerShortName = $map['ProviderShortName'];
        }
        if (isset($map['ProviderType'])) {
            $model->providerType = $map['ProviderType'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
