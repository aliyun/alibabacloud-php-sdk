<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastPopLocationsResponseBody;

use AlibabaCloud\Tea\Model;

class anycastPopLocationList extends Model
{
    /**
     * @description The ID of the region where the access point is deployed.
     *
     * @example us-west-1-pop
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the region where the access point is deployed.
     *
     * @example us-west-1-pop
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
     * @return anycastPopLocationList
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
