<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeTrafficInfoResponseBody\trafficInfo;
use AlibabaCloud\Tea\Model;

class DescribeTrafficInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var trafficInfo
     */
    public $trafficInfo;
    protected $_name = [
        'requestId'   => 'RequestId',
        'trafficInfo' => 'TrafficInfo',
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
        if (null !== $this->trafficInfo) {
            $res['TrafficInfo'] = null !== $this->trafficInfo ? $this->trafficInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrafficInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrafficInfo'])) {
            $model->trafficInfo = trafficInfo::fromMap($map['TrafficInfo']);
        }

        return $model;
    }
}
