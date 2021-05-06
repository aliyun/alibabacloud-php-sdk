<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeRegionsResponse;

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
    public $regionId;
    protected $_name = [
        'regionEnName' => 'RegionEnName',
        'regionName'   => 'RegionName',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('regionEnName', $this->regionEnName, true);
        Model::validateRequired('regionName', $this->regionName, true);
        Model::validateRequired('regionId', $this->regionId, true);
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
