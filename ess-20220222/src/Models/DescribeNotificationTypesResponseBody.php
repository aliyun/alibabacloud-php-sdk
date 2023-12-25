<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DescribeNotificationTypesResponseBody extends Model
{
    /**
     * @description The types of the notifications.
     *
     *   AUTOSCALING:SCALE_OUT_SUCCESS: The scale-out activity succeeds.
     *   AUTOSCALING:SCALE_IN_SUCCESS: The scale-in activity succeeds.
     *   AUTOSCALING:SCALE_OUT_ERROR: The scale-out activity fails.
     *   AUTOSCALING:SCALE_IN_ERROR: The scale-in activity fails.
     *   AUTOSCALING:SCALE_REJECT: The request for scaling activities is rejected.
     *   AUTOSCALING:SCALE_OUT_START: The scale-out activity starts.
     *   AUTOSCALING:SCALE_IN_START: The scale-in activity starts.
     *   AUTOSCALING:SCHEDULE_TASK_EXPIRING: Auto Scaling sends a notification when a scheduled task is about to expire.
     *
     * @var string[]
     */
    public $notificationTypes;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'notificationTypes' => 'NotificationTypes',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notificationTypes) {
            $res['NotificationTypes'] = $this->notificationTypes;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNotificationTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotificationTypes'])) {
            if (!empty($map['NotificationTypes'])) {
                $model->notificationTypes = $map['NotificationTypes'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
