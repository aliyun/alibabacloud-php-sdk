<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberOperatorAttributeResponseBody;

use AlibabaCloud\Tea\Model;

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
     * @example false
     *
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
    public $province;
    protected $_name = [
        'basicCarrier'        => 'BasicCarrier',
        'carrier'             => 'Carrier',
        'city'                => 'City',
        'isNumberPortability' => 'IsNumberPortability',
        'numberSegment'       => 'NumberSegment',
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
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->isNumberPortability) {
            $res['IsNumberPortability'] = $this->isNumberPortability;
        }
        if (null !== $this->numberSegment) {
            $res['NumberSegment'] = $this->numberSegment;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['IsNumberPortability'])) {
            $model->isNumberPortability = $map['IsNumberPortability'];
        }
        if (isset($map['NumberSegment'])) {
            $model->numberSegment = $map['NumberSegment'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
