<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsListRuleCategoriesResponseBody\list_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsListRuleCategoriesResponseBody\list_\region\area;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsListRuleCategoriesResponseBody\list_\region\city;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsListRuleCategoriesResponseBody\list_\region\continent;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsListRuleCategoriesResponseBody\list_\region\country;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsListRuleCategoriesResponseBody\list_\region\isp;
use AlibabaCloud\SDK\Httpdns\V20160201\Models\SdnsListRuleCategoriesResponseBody\list_\region\province;

class region extends Model
{
    /**
     * @var area
     */
    public $area;

    /**
     * @var city
     */
    public $city;

    /**
     * @var continent
     */
    public $continent;

    /**
     * @var country
     */
    public $country;

    /**
     * @var isp
     */
    public $isp;

    /**
     * @var province
     */
    public $province;
    protected $_name = [
        'area' => 'Area',
        'city' => 'City',
        'continent' => 'Continent',
        'country' => 'Country',
        'isp' => 'Isp',
        'province' => 'Province',
    ];

    public function validate()
    {
        if (null !== $this->area) {
            $this->area->validate();
        }
        if (null !== $this->city) {
            $this->city->validate();
        }
        if (null !== $this->continent) {
            $this->continent->validate();
        }
        if (null !== $this->country) {
            $this->country->validate();
        }
        if (null !== $this->isp) {
            $this->isp->validate();
        }
        if (null !== $this->province) {
            $this->province->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = null !== $this->area ? $this->area->toArray($noStream) : $this->area;
        }

        if (null !== $this->city) {
            $res['City'] = null !== $this->city ? $this->city->toArray($noStream) : $this->city;
        }

        if (null !== $this->continent) {
            $res['Continent'] = null !== $this->continent ? $this->continent->toArray($noStream) : $this->continent;
        }

        if (null !== $this->country) {
            $res['Country'] = null !== $this->country ? $this->country->toArray($noStream) : $this->country;
        }

        if (null !== $this->isp) {
            $res['Isp'] = null !== $this->isp ? $this->isp->toArray($noStream) : $this->isp;
        }

        if (null !== $this->province) {
            $res['Province'] = null !== $this->province ? $this->province->toArray($noStream) : $this->province;
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
        if (isset($map['Area'])) {
            $model->area = area::fromMap($map['Area']);
        }

        if (isset($map['City'])) {
            $model->city = city::fromMap($map['City']);
        }

        if (isset($map['Continent'])) {
            $model->continent = continent::fromMap($map['Continent']);
        }

        if (isset($map['Country'])) {
            $model->country = country::fromMap($map['Country']);
        }

        if (isset($map['Isp'])) {
            $model->isp = isp::fromMap($map['Isp']);
        }

        if (isset($map['Province'])) {
            $model->province = province::fromMap($map['Province']);
        }

        return $model;
    }
}
