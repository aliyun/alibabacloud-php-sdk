<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetDBTaskSQLJobLogRequest extends Model
{
    /**
     * @description The ID of the SQL task. You can call the [ListDBTaskSQLJob](https://help.aliyun.com/document_detail/207049.html) operation to query the ID of the SQL task.
     *
     * This parameter is required.
     * @example 1276****
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'jobId' => 'JobId',
        'tid'   => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDBTaskSQLJobLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
