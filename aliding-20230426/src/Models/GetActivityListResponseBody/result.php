<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetActivityListResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $activityNameInEnglish;
    protected $_name = [
        'activityId' => 'ActivityId',
        'activityName' => 'ActivityName',
        'activityNameInEnglish' => 'ActivityNameInEnglish',
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

        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }

        if (null !== $this->activityNameInEnglish) {
            $res['ActivityNameInEnglish'] = $this->activityNameInEnglish;
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

        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }

        if (isset($map['ActivityNameInEnglish'])) {
            $model->activityNameInEnglish = $map['ActivityNameInEnglish'];
        }

        return $model;
    }
}
