<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsResponseBody\apiTrafficControls;

use AlibabaCloud\Dara\Model;

class apiTrafficControlItem extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $boundTime;

    /**
     * @var string
     */
    public $trafficControlId;

    /**
     * @var string
     */
    public $trafficControlName;
    protected $_name = [
        'apiId' => 'ApiId',
        'apiName' => 'ApiName',
        'boundTime' => 'BoundTime',
        'trafficControlId' => 'TrafficControlId',
        'trafficControlName' => 'TrafficControlName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
