<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateNotificationPolicyResponseBody\notificationPolicy;

use AlibabaCloud\Tea\Model;

class groupRule extends Model
{
    /**
     * @description The time interval of grouping. Unit: seconds. Default value: 30.
     *
     * @example 30
     *
     * @var int
     */
    public $groupInterval;

    /**
     * @description The waiting time for grouping. Unit: seconds. Default value: 5.
     *
     * @example 5
     *
     * @var int
     */
    public $groupWait;

    /**
     * @description An array of alert event group objects.
     *
     *   If you do not specify the groupingFields field, all alerts will be sent to contacts based on `alertname`.
     *   If you specify the groupingFields field, alerts with the same field will be sent to contacts in one notification.
     *
     * @var string[]
     */
    public $groupingFields;
    protected $_name = [
        'groupInterval'  => 'GroupInterval',
        'groupWait'      => 'GroupWait',
        'groupingFields' => 'GroupingFields',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupInterval) {
            $res['GroupInterval'] = $this->groupInterval;
        }
        if (null !== $this->groupWait) {
            $res['GroupWait'] = $this->groupWait;
        }
        if (null !== $this->groupingFields) {
            $res['GroupingFields'] = $this->groupingFields;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupInterval'])) {
            $model->groupInterval = $map['GroupInterval'];
        }
        if (isset($map['GroupWait'])) {
            $model->groupWait = $map['GroupWait'];
        }
        if (isset($map['GroupingFields'])) {
            if (!empty($map['GroupingFields'])) {
                $model->groupingFields = $map['GroupingFields'];
            }
        }

        return $model;
    }
}
