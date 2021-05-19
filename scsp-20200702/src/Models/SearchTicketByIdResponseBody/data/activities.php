<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models\SearchTicketByIdResponseBody\data;

use AlibabaCloud\Tea\Model;

class activities extends Model
{
    /**
     * @var string
     */
    public $activityFormData;

    /**
     * @var string
     */
    public $activityCode;
    protected $_name = [
        'activityFormData' => 'ActivityFormData',
        'activityCode'     => 'ActivityCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityFormData) {
            $res['ActivityFormData'] = $this->activityFormData;
        }
        if (null !== $this->activityCode) {
            $res['ActivityCode'] = $this->activityCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityFormData'])) {
            $model->activityFormData = $map['ActivityFormData'];
        }
        if (isset($map['ActivityCode'])) {
            $model->activityCode = $map['ActivityCode'];
        }

        return $model;
    }
}
