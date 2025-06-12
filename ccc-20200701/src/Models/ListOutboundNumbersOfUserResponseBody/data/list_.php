<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListOutboundNumbersOfUserResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $providerCode;

    /**
     * @var string
     */
    public $providerDisplayName;

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
        'province' => 'Province',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->province) {
            $res['Province'] = $this->province;
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

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
