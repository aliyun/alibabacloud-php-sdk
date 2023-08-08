<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeActionEventPolicyResponseBody extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **DescribeActionEventPolicy**.
     *
     * @example True
     *
     * @var string
     */
    public $enableEventLog;

    /**
     * @description Indicates whether the event history feature is enabled.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
     * @example CCECD3CD-AB2D-4F6D-BEDE-47BC90A398D2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'enableEventLog' => 'EnableEventLog',
        'regionId'       => 'RegionId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableEventLog) {
            $res['EnableEventLog'] = $this->enableEventLog;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeActionEventPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableEventLog'])) {
            $model->enableEventLog = $map['EnableEventLog'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
