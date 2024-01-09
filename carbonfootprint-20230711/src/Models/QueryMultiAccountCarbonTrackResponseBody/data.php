<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CarbonFootprint\V20230711\Models\QueryMultiAccountCarbonTrackResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0.0650967
     *
     * @var string
     */
    public $carbonActualEmission;

    /**
     * @example 2023-01
     *
     * @var string
     */
    public $month;

    /**
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @example 1665635164411336
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'carbonActualEmission' => 'CarbonActualEmission',
        'month'                => 'Month',
        'productCode'          => 'ProductCode',
        'region'               => 'Region',
        'uid'                  => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carbonActualEmission) {
            $res['CarbonActualEmission'] = $this->carbonActualEmission;
        }
        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['CarbonActualEmission'])) {
            $model->carbonActualEmission = $map['CarbonActualEmission'];
        }
        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
