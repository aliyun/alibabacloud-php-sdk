<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class GetAssignJobsAsyncResultRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example dc79b0f9-a781-4305-85e2-d5d56679ae69
     *
     * @var string
     */
    public $asyncTaskId;
    protected $_name = [
        'asyncTaskId' => 'AsyncTaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['AsyncTaskId'] = $this->asyncTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAssignJobsAsyncResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncTaskId'])) {
            $model->asyncTaskId = $map['AsyncTaskId'];
        }

        return $model;
    }
}
