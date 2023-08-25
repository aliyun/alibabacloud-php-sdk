<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastServerRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class anycastServerRegionList extends Model
{
    /**
     * @description The ID of the region.
     *
     * @example eu-west-1
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the region.
     *
     * @example eu-west-1-gb33-a01
     *
     * @var string
     */
    public $regionName;
    protected $_name = [
        'regionId'   => 'RegionId',
        'regionName' => 'RegionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return anycastServerRegionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        return $model;
    }
}
