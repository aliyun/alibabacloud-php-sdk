<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsByApiResponseBody\trafficControlItems;

use AlibabaCloud\Tea\Model;

class trafficControlItem extends Model
{
    /**
     * @description *   This API is intended for API providers.
     *
     * @example 2016-07-23T08:28:48Z
     *
     * @var string
     */
    public $boundTime;

    /**
     * @description The name of the throttling policy.
     *
     * @example dd05f1c54d6749eda95f9fa6d491449a
     *
     * @var string
     */
    public $trafficControlItemId;

    /**
     * @description Queries the throttling policy that is bound to a specific API.
     *
     * @example mysecret
     *
     * @var string
     */
    public $trafficControlItemName;
    protected $_name = [
        'boundTime'              => 'BoundTime',
        'trafficControlItemId'   => 'TrafficControlItemId',
        'trafficControlItemName' => 'TrafficControlItemName',
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
        if (null !== $this->trafficControlItemId) {
            $res['TrafficControlItemId'] = $this->trafficControlItemId;
        }
        if (null !== $this->trafficControlItemName) {
            $res['TrafficControlItemName'] = $this->trafficControlItemName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficControlItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BoundTime'])) {
            $model->boundTime = $map['BoundTime'];
        }
        if (isset($map['TrafficControlItemId'])) {
            $model->trafficControlItemId = $map['TrafficControlItemId'];
        }
        if (isset($map['TrafficControlItemName'])) {
            $model->trafficControlItemName = $map['TrafficControlItemName'];
        }

        return $model;
    }
}
