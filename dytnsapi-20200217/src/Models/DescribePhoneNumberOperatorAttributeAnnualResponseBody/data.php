<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOperatorAttributeAnnualResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $basicCarrier;

    /**
     * @var string
     */
    public $carrier;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $mts;

    /**
     * @var bool
     */
    public $numberPortability;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'basicCarrier' => 'BasicCarrier',
        'carrier' => 'Carrier',
        'city' => 'City',
        'mts' => 'Mts',
        'numberPortability' => 'NumberPortability',
        'province' => 'Province',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicCarrier) {
            $res['BasicCarrier'] = $this->basicCarrier;
        }

        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->mts) {
            $res['Mts'] = $this->mts;
        }

        if (null !== $this->numberPortability) {
            $res['NumberPortability'] = $this->numberPortability;
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
        if (isset($map['BasicCarrier'])) {
            $model->basicCarrier = $map['BasicCarrier'];
        }

        if (isset($map['Carrier'])) {
            $model->carrier = $map['Carrier'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['Mts'])) {
            $model->mts = $map['Mts'];
        }

        if (isset($map['NumberPortability'])) {
            $model->numberPortability = $map['NumberPortability'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
