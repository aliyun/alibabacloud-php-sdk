<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $localName;

    /**
     * @description endpoint
     *
     * @example schedulerx3.cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $regionEndpoint;

    /**
     * @example cn-hangzhou
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
     * @return regions
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
