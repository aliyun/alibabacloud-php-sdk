<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class activity extends Model
{
    /**
     * @example act-xxaanfaf
     *
     * @var string
     */
    public $activityId;

    /**
     * @example running
     *
     * @var string
     */
    public $activityInstanceStatus;

    /**
     * @example activity-124
     *
     * @var string
     */
    public $activityName;

    /**
     * @example redirect task
     *
     * @var string
     */
    public $activityNameInEnglish;

    /**
     * @example 12345
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'activityId'             => 'ActivityId',
        'activityInstanceStatus' => 'ActivityInstanceStatus',
        'activityName'           => 'ActivityName',
        'activityNameInEnglish'  => 'ActivityNameInEnglish',
        'id'                     => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->activityInstanceStatus) {
            $res['ActivityInstanceStatus'] = $this->activityInstanceStatus;
        }
        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }
        if (null !== $this->activityNameInEnglish) {
            $res['ActivityNameInEnglish'] = $this->activityNameInEnglish;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['ActivityInstanceStatus'])) {
            $model->activityInstanceStatus = $map['ActivityInstanceStatus'];
        }
        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }
        if (isset($map['ActivityNameInEnglish'])) {
            $model->activityNameInEnglish = $map['ActivityNameInEnglish'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
