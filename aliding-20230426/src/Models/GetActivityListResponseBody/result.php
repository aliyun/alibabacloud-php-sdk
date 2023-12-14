<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetActivityListResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 0q8gsudxxx
     *
     * @var string
     */
    public $activityId;

    /**
     * @example activity123
     *
     * @var string
     */
    public $activityName;

    /**
     * @example activity123
     *
     * @var string
     */
    public $activityNameInEnglish;
    protected $_name = [
        'activityId'            => 'ActivityId',
        'activityName'          => 'ActivityName',
        'activityNameInEnglish' => 'ActivityNameInEnglish',
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
        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }
        if (null !== $this->activityNameInEnglish) {
            $res['ActivityNameInEnglish'] = $this->activityNameInEnglish;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
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
