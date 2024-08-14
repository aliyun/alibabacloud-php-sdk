<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribeMobileOperatorAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $basicCarrier;

    /**
     * @example 示例值
     *
     * @var string
     */
    public $carrier;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $city;

    /**
     * @example true
     *
     * @var bool
     */
    public $isNumberPortability;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $province;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $realNumber;

    /**
     * @example 示例值示例值
     *
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
