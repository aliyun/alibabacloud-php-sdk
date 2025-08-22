<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class ListAlertEventsRequest extends Model
{
    /**
     * @var string
     */
    public $alertName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $matchingConditions;

    /**
     * @var int
     */
    public $page;

    /**
     * @var bool
     */
    public $showNotificationPolicies;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'alertName' => 'AlertName',
        'endTime' => 'EndTime',
        'matchingConditions' => 'MatchingConditions',
        'page' => 'Page',
        'showNotificationPolicies' => 'ShowNotificationPolicies',
        'size' => 'Size',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->matchingConditions) {
            $res['MatchingConditions'] = $this->matchingConditions;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->showNotificationPolicies) {
            $res['ShowNotificationPolicies'] = $this->showNotificationPolicies;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MatchingConditions'])) {
            $model->matchingConditions = $map['MatchingConditions'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['ShowNotificationPolicies'])) {
            $model->showNotificationPolicies = $map['ShowNotificationPolicies'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
