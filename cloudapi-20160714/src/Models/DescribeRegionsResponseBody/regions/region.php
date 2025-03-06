<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\Tea\Model;

class region extends Model
{
    /**
     * @description The name of the region.
     *
     * @example China (Shenzhen)
     *
     * @var string
     */
    public $localName;

    /**
     * @description The endpoint of the service for the region.
     *
     * @example apigateway.cn-shenzhen.aliyuncs.com
     *
     * @var string
     */
    public $regionEndpoint;

    /**
     * @description The ID of the region.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'localName'      => 'LocalName',
        'regionEndpoint' => 'RegionEndpoint',
        'regionId'       => 'RegionId',
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

        return $model;
    }
}
