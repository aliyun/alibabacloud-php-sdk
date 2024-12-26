<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchCaseFullTextResponseBody\data\caseResult\caseDomain;

use AlibabaCloud\Tea\Model;

class trialCourt extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $commonLevel;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $county;

    /**
     * @var string
     */
    public $district;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $province;

    /**
     * @example “”
     *
     * @var string
     */
    public $specialLevel;
    protected $_name = [
        'city'         => 'city',
        'commonLevel'  => 'commonLevel',
        'country'      => 'country',
        'county'       => 'county',
        'district'     => 'district',
        'name'         => 'name',
        'province'     => 'province',
        'specialLevel' => 'specialLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }
        if (null !== $this->commonLevel) {
            $res['commonLevel'] = $this->commonLevel;
        }
        if (null !== $this->country) {
            $res['country'] = $this->country;
        }
        if (null !== $this->county) {
            $res['county'] = $this->county;
        }
        if (null !== $this->district) {
            $res['district'] = $this->district;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->province) {
            $res['province'] = $this->province;
        }
        if (null !== $this->specialLevel) {
            $res['specialLevel'] = $this->specialLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trialCourt
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['city'])) {
            $model->city = $map['city'];
        }
        if (isset($map['commonLevel'])) {
            $model->commonLevel = $map['commonLevel'];
        }
        if (isset($map['country'])) {
            $model->country = $map['country'];
        }
        if (isset($map['county'])) {
            $model->county = $map['county'];
        }
        if (isset($map['district'])) {
            $model->district = $map['district'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['province'])) {
            $model->province = $map['province'];
        }
        if (isset($map['specialLevel'])) {
            $model->specialLevel = $map['specialLevel'];
        }

        return $model;
    }
}
