<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeBlockedRegionsResponseBody\infoList;

use AlibabaCloud\Tea\Model;

class infoItem extends Model
{
    /**
     * @description The district to which the country or region belongs.
     *
     * @example Asia
     *
     * @var string
     */
    public $continent;

    /**
     * @description The abbreviation of the name of the country or region.
     *
     * @example AF
     *
     * @var string
     */
    public $countriesAndRegions;

    /**
     * @description The name of the country or region.
     *
     * @example Afghanistan
     *
     * @var string
     */
    public $countriesAndRegionsName;
    protected $_name = [
        'continent'               => 'Continent',
        'countriesAndRegions'     => 'CountriesAndRegions',
        'countriesAndRegionsName' => 'CountriesAndRegionsName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return infoItem
     */
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
