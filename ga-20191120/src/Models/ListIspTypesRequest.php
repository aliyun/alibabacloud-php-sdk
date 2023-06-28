<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ListIspTypesRequest extends Model
{
    /**
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The type of the Global Accelerator (GA) instance to be queried. Valid values:
     *
     *   **basic**: basic GA instance
     *   **standard**: standard GA instance
     *
     * @example basic
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @description The ID of the acceleration region to be queried.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $businessRegionId;
    protected $_name = [
        'acceleratorId'    => 'AcceleratorId',
        'acceleratorType'  => 'AcceleratorType',
        'businessRegionId' => 'BusinessRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }
        if (null !== $this->businessRegionId) {
            $res['BusinessRegionId'] = $this->businessRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIspTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }
        if (isset($map['BusinessRegionId'])) {
            $model->businessRegionId = $map['BusinessRegionId'];
        }

        return $model;
    }
}
