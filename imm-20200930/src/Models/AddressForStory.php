<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class AddressForStory extends Model
{
    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $district;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $township;
    protected $_name = [
        'city' => 'City',
        'country' => 'Country',
        'district' => 'District',
        'province' => 'Province',
        'township' => 'Township',
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

        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }

        if (null !== $this->district) {
            $res['District'] = $this->district;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        if (null !== $this->township) {
            $res['Township'] = $this->township;
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

        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }

        if (isset($map['District'])) {
            $model->district = $map['District'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        if (isset($map['Township'])) {
            $model->township = $map['Township'];
        }

        return $model;
    }
}
