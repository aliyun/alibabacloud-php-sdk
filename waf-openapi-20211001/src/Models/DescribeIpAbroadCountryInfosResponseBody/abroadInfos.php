<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeIpAbroadCountryInfosResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeIpAbroadCountryInfosResponseBody\abroadInfos\regions;

class abroadInfos extends Model
{
    /**
     * @var string
     */
    public $continent;

    /**
     * @var string
     */
    public $country;

    /**
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

    public function validate()
    {
        if (\is_array($this->regions)) {
            Model::validateArray($this->regions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->regions)) {
                $res['Regions'] = [];
                $n1 = 0;
                foreach ($this->regions as $item1) {
                    $res['Regions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }

        if (isset($map['CountryName'])) {
            $model->countryName = $map['CountryName'];
        }

        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = [];
                $n1 = 0;
                foreach ($map['Regions'] as $item1) {
                    $model->regions[$n1] = regions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
