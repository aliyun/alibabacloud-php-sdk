<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerRegionsResponseBody\regions;

use AlibabaCloud\Tea\Model;

class subRegions extends Model
{
    /**
     * @description Secondary region Chinese full name
     *
     * @example 印度尼西亚
     *
     * @var string
     */
    public $subRegionCnName;

    /**
     * @description Secondary region code
     *
     * @example ID
     *
     * @var string
     */
    public $subRegionCode;

    /**
     * @description Secondary region English full name
     *
     * @example Indonesia
     *
     * @var string
     */
    public $subRegionEnName;
    protected $_name = [
        'subRegionCnName' => 'SubRegionCnName',
        'subRegionCode' => 'SubRegionCode',
        'subRegionEnName' => 'SubRegionEnName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->subRegionCnName) {
            $res['SubRegionCnName'] = $this->subRegionCnName;
        }
        if (null !== $this->subRegionCode) {
            $res['SubRegionCode'] = $this->subRegionCode;
        }
        if (null !== $this->subRegionEnName) {
            $res['SubRegionEnName'] = $this->subRegionEnName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subRegions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubRegionCnName'])) {
            $model->subRegionCnName = $map['SubRegionCnName'];
        }
        if (isset($map['SubRegionCode'])) {
            $model->subRegionCode = $map['SubRegionCode'];
        }
        if (isset($map['SubRegionEnName'])) {
            $model->subRegionEnName = $map['SubRegionEnName'];
        }

        return $model;
    }
}
