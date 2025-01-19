<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribeMobileOperatorAttributeResponseBody;

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
     * @var bool
     */
    public $isNumberPortability;
    /**
     * @var string
     */
    public $province;
    /**
     * @var string
     */
    public $realNumber;
    /**
     * @var string
     */
    public $segmentCarrier;
    protected $_name = [
        'basicCarrier'        => 'BasicCarrier',
        'carrier'             => 'Carrier',
        'city'                => 'City',
        'isNumberPortability' => 'IsNumberPortability',
        'province'            => 'Province',
        'realNumber'          => 'RealNumber',
        'segmentCarrier'      => 'SegmentCarrier',
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

        if (null !== $this->isNumberPortability) {
            $res['IsNumberPortability'] = $this->isNumberPortability;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        if (null !== $this->realNumber) {
            $res['RealNumber'] = $this->realNumber;
        }

        if (null !== $this->segmentCarrier) {
            $res['SegmentCarrier'] = $this->segmentCarrier;
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

        if (isset($map['IsNumberPortability'])) {
            $model->isNumberPortability = $map['IsNumberPortability'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        if (isset($map['RealNumber'])) {
            $model->realNumber = $map['RealNumber'];
        }

        if (isset($map['SegmentCarrier'])) {
            $model->segmentCarrier = $map['SegmentCarrier'];
        }

        return $model;
    }
}
