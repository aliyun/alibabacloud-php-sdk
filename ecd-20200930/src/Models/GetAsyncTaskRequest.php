<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetAsyncTaskRequest extends Model
{
    /**
     * @description The asynchronous task ID. This parameter is not returned if you copy files. This parameter is returned if you copy folders in the backend in an asynchronous manner. You can call the GetAsyncTask operation to obtain the ID and information about an asynchronous task.
     *
     * @example 81a8a07a-aec4-4dd5-80da-ae69e482****
     *
     * @var string
     */
    public $asyncTaskId;

    /**
     * @description The ID of the cloud disk.
     *
     * @example cn-shanghai+cds-135515****
     *
     * @var string
     */
    public $cdsId;
    protected $_name = [
        'asyncTaskId' => 'AsyncTaskId',
        'cdsId'       => 'CdsId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['AsyncTaskId'] = $this->asyncTaskId;
        }
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAsyncTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncTaskId'])) {
            $model->asyncTaskId = $map['AsyncTaskId'];
        }
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }

        return $model;
    }
}
