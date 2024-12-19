<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\SDK\Privatelink\V20200415\Models\DescribeRegionsResponseBody\regions\region\serviceResourceTypes;
use AlibabaCloud\Tea\Model;

class region extends Model
{
    /**
     * @description The name of the region.
     *
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $localName;

    /**
     * @description The endpoint of the region.
     *
     * @example privatelink.cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $regionEndpoint;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var serviceResourceTypes
     */
    public $serviceResourceTypes;
    protected $_name = [
        'localName'            => 'LocalName',
        'regionEndpoint'       => 'RegionEndpoint',
        'regionId'             => 'RegionId',
        'serviceResourceTypes' => 'ServiceResourceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceResourceTypes) {
            $res['ServiceResourceTypes'] = null !== $this->serviceResourceTypes ? $this->serviceResourceTypes->toMap() : null;
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
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceResourceTypes'])) {
            $model->serviceResourceTypes = serviceResourceTypes::fromMap($map['ServiceResourceTypes']);
        }

        return $model;
    }
}
