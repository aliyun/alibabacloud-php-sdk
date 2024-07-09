<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\Tea\Model;

class region extends Model
{
    /**
     * @description The display name of the region, which varies based on the current language.
     *
     * @example China (Beijing)
     *
     * @var string
     */
    public $localName;

    /**
     * @description The endpoint of the service in the region.
     *
     * @example pvtz.aliyuncs.com
     *
     * @var string
     */
    public $regionEndpoint;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the region.
     *
     * @example China (Beijing)
     *
     * @var string
     */
    public $regionName;
    protected $_name = [
        'localName'      => 'LocalName',
        'regionEndpoint' => 'RegionEndpoint',
        'regionId'       => 'RegionId',
        'regionName'     => 'RegionName',
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
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
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
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        return $model;
    }
}
