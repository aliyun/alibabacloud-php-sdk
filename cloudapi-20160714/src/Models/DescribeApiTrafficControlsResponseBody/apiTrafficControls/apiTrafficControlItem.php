<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsResponseBody\apiTrafficControls;

use AlibabaCloud\Tea\Model;

class apiTrafficControlItem extends Model
{
    /**
     * @var string
     */
    public $boundTime;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $trafficControlId;

    /**
     * @var string
     */
    public $trafficControlName;

    /**
     * @var string
     */
    public $apiName;
    protected $_name = [
        'boundTime'          => 'BoundTime',
        'apiId'              => 'ApiId',
        'trafficControlId'   => 'TrafficControlId',
        'trafficControlName' => 'TrafficControlName',
        'apiName'            => 'ApiName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boundTime) {
            $res['BoundTime'] = $this->boundTime;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->trafficControlId) {
            $res['TrafficControlId'] = $this->trafficControlId;
        }
        if (null !== $this->trafficControlName) {
            $res['TrafficControlName'] = $this->trafficControlName;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiTrafficControlItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BoundTime'])) {
            $model->boundTime = $map['BoundTime'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['TrafficControlId'])) {
            $model->trafficControlId = $map['TrafficControlId'];
        }
        if (isset($map['TrafficControlName'])) {
            $model->trafficControlName = $map['TrafficControlName'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }

        return $model;
    }
}
