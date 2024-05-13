<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\Tea\Model;

class region extends Model
{
    /**
     * @description The English name of the region.
     *
     * @example East China 1
     *
     * @var string
     */
    public $regionEnName;

    /**
     * @description The Chinese name of the region.
     *
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The code of the region.
     *
     * @example cn-hangzhou-dg-a01
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNoAlias;
    protected $_name = [
        'regionEnName'  => 'RegionEnName',
        'regionName'    => 'RegionName',
        'regionNo'      => 'RegionNo',
        'regionNoAlias' => 'RegionNoAlias',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionEnName) {
            $res['RegionEnName'] = $this->regionEnName;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->regionNoAlias) {
            $res['RegionNoAlias'] = $this->regionNoAlias;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return region
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionEnName'])) {
            $model->regionEnName = $map['RegionEnName'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['RegionNoAlias'])) {
            $model->regionNoAlias = $map['RegionNoAlias'];
        }

        return $model;
    }
}
