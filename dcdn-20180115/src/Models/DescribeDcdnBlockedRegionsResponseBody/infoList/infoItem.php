<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBlockedRegionsResponseBody\infoList;

use AlibabaCloud\Dara\Model;

class infoItem extends Model
{
    /**
     * @var string
     */
    public $continent;

    /**
     * @var string
     */
    public $countriesAndRegions;

    /**
     * @var string
     */
    public $countriesAndRegionsName;
    protected $_name = [
        'continent' => 'Continent',
        'countriesAndRegions' => 'CountriesAndRegions',
        'countriesAndRegionsName' => 'CountriesAndRegionsName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->continent) {
            $res['Continent'] = $this->continent;
        }

        if (null !== $this->countriesAndRegions) {
            $res['CountriesAndRegions'] = $this->countriesAndRegions;
        }

        if (null !== $this->countriesAndRegionsName) {
            $res['CountriesAndRegionsName'] = $this->countriesAndRegionsName;
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
        if (isset($map['Continent'])) {
            $model->continent = $map['Continent'];
        }

        if (isset($map['CountriesAndRegions'])) {
            $model->countriesAndRegions = $map['CountriesAndRegions'];
        }

        if (isset($map['CountriesAndRegionsName'])) {
            $model->countriesAndRegionsName = $map['CountriesAndRegionsName'];
        }

        return $model;
    }
}
