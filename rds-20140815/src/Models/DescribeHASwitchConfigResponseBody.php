<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeHASwitchConfigResponseBody extends Model
{
    /**
     * @description The status of the automatic primary/secondary switchover feature. Valid values:
     *
     *   **Auto:** The automatic primary/secondary switchover feature is enabled. The system automatically switches your workloads over from the instance to its secondary instance in the event of a fault.
     *   **Manual:** The automatic primary/secondary switchover feature is temporarily disabled.
     *
     * @example Manual
     *
     * @var string
     */
    public $HAConfig;

    /**
     * @description The time when the automatic primary/secondary switchover feature is enabled again. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-08-29T15:00:00Z
     *
     * @var string
     */
    public $manualHATime;

    /**
     * @description The ID of the request.
     *
     * @example 4FDF4B79-2741-4C5F-8C76-4B953FC5C2B1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'HAConfig'     => 'HAConfig',
        'manualHATime' => 'ManualHATime',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->HAConfig) {
            $res['HAConfig'] = $this->HAConfig;
        }
        if (null !== $this->manualHATime) {
            $res['ManualHATime'] = $this->manualHATime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHASwitchConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HAConfig'])) {
            $model->HAConfig = $map['HAConfig'];
        }
        if (isset($map['ManualHATime'])) {
            $model->manualHATime = $map['ManualHATime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
