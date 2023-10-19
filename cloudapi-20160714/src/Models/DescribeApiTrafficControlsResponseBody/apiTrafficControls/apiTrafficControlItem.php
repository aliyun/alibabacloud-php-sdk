<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsResponseBody\apiTrafficControls;

use AlibabaCloud\Tea\Model;

class apiTrafficControlItem extends Model
{
    /**
     * @description The ID of the API.
     *
     * @example 46fbb52840d146f186e38e8e70fc8c90
     *
     * @var string
     */
    public $apiId;

    /**
     * @description API operation
     *
     * @example testapi
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The binding time of the throttling policy.
     *
     * @example 2016-07-23T08:28:48Z
     *
     * @var string
     */
    public $boundTime;

    /**
     * @description The ID of the throttling policy.
     *
     * @example dd05f1c54d6749eda95f9fa6d491449a
     *
     * @var string
     */
    public $trafficControlId;

    /**
     * @description The name of the throttling policy.
     *
     * @example backendsignature
     *
     * @var string
     */
    public $trafficControlName;
    protected $_name = [
        'apiId'              => 'ApiId',
        'apiName'            => 'ApiName',
        'boundTime'          => 'BoundTime',
        'trafficControlId'   => 'TrafficControlId',
        'trafficControlName' => 'TrafficControlName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->boundTime) {
            $res['BoundTime'] = $this->boundTime;
        }
        if (null !== $this->trafficControlId) {
            $res['TrafficControlId'] = $this->trafficControlId;
        }
        if (null !== $this->trafficControlName) {
            $res['TrafficControlName'] = $this->trafficControlName;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['BoundTime'])) {
            $model->boundTime = $map['BoundTime'];
        }
        if (isset($map['TrafficControlId'])) {
            $model->trafficControlId = $map['TrafficControlId'];
        }
        if (isset($map['TrafficControlName'])) {
            $model->trafficControlName = $map['TrafficControlName'];
        }

        return $model;
    }
}
