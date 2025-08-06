<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody\tasks;

use AlibabaCloud\Dara\Model;

class activity extends Model
{
    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $activityInstanceStatus;

    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $activityNameInEnglish;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'activityId' => 'ActivityId',
        'activityInstanceStatus' => 'ActivityInstanceStatus',
        'activityName' => 'ActivityName',
        'activityNameInEnglish' => 'ActivityNameInEnglish',
        'id' => 'Id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
