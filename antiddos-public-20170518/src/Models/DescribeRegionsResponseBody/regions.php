<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @var string
     */
    public $regionEnName;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $regionNo;

    /**
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
     * @return regions
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
