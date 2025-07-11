<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeIpAbroadCountryInfosResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeIpAbroadCountryInfosResponseBody\abroadInfos\regions;
use AlibabaCloud\Tea\Model;

class abroadInfos extends Model
{
    /**
     * @example 北美洲
     *
     * @var string
     */
    public $continent;

    /**
     * @example US
     *
     * @var string
     */
    public $country;

    /**
     * @example 美国
     *
     * @var string
     */
    public $countryName;

    /**
     * @var regions[]
     */
    public $regions;
    protected $_name = [
        'continent' => 'Continent',
        'country' => 'Country',
        'countryName' => 'CountryName',
        'regions' => 'Regions',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->continent) {
            $res['Continent'] = $this->continent;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->countryName) {
            $res['CountryName'] = $this->countryName;
        }
        if (null !== $this->regions) {
            $res['Regions'] = [];
            if (null !== $this->regions && \is_array($this->regions)) {
                $n = 0;
                foreach ($this->regions as $item) {
                    $res['Regions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return abroadInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Continent'])) {
            $model->continent = $map['Continent'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['CountryName'])) {
            $model->countryName = $map['CountryName'];
        }
        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = [];
                $n = 0;
                foreach ($map['Regions'] as $item) {
                    $model->regions[$n++] = null !== $item ? regions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
