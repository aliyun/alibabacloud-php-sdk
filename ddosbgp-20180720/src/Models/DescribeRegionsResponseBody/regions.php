<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @description The English name of the region where the cloud assets reside.
     *
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $regionEnName;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the region where the cloud assets reside.
     *
     * @var string
     */
    public $regionName;
    protected $_name = [
        'regionEnName' => 'RegionEnName',
        'regionId'     => 'RegionId',
        'regionName'   => 'RegionName',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        return $model;
    }
}
