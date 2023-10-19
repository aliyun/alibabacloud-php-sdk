<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsByApiResponseBody\trafficControlItems;
use AlibabaCloud\Tea\Model;

class DescribeTrafficControlsByApiResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ004
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned throttling policy information. It is an array consisting of TrafficControlItem data.
     *
     * @var trafficControlItems
     */
    public $trafficControlItems;
    protected $_name = [
        'requestId'           => 'RequestId',
        'trafficControlItems' => 'TrafficControlItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->trafficControlItems) {
            $res['TrafficControlItems'] = null !== $this->trafficControlItems ? $this->trafficControlItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrafficControlsByApiResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrafficControlItems'])) {
            $model->trafficControlItems = trafficControlItems::fromMap($map['TrafficControlItems']);
        }

        return $model;
    }
}
