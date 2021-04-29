<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeActionEventPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $enableEventLog;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'enableEventLog' => 'EnableEventLog',
        'requestId'      => 'RequestId',
        'regionId'       => 'RegionId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
