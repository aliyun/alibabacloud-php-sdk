<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryPhoneNumberAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class phoneNumberAttribute extends Model
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
     * @var bool
     */
    public $isNumberPortability;

    /**
     * @var int
     */
    public $numberSegment;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'basicCarrier'        => 'BasicCarrier',
        'carrier'             => 'Carrier',
        'isNumberPortability' => 'IsNumberPortability',
        'numberSegment'       => 'NumberSegment',
        'city'                => 'City',
        'province'            => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicCarrier) {
            $res['BasicCarrier'] = $this->basicCarrier;
        }
        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
        }
        if (null !== $this->isNumberPortability) {
            $res['IsNumberPortability'] = $this->isNumberPortability;
        }
        if (null !== $this->numberSegment) {
            $res['NumberSegment'] = $this->numberSegment;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return phoneNumberAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasicCarrier'])) {
            $model->basicCarrier = $map['BasicCarrier'];
        }
        if (isset($map['Carrier'])) {
            $model->carrier = $map['Carrier'];
        }
        if (isset($map['IsNumberPortability'])) {
            $model->isNumberPortability = $map['IsNumberPortability'];
        }
        if (isset($map['NumberSegment'])) {
            $model->numberSegment = $map['NumberSegment'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
