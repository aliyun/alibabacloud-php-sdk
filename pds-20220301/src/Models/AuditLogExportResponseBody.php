<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class AuditLogExportResponseBody extends Model
{
    /**
     * @example 4221bf6e6ab43c255edc4463bf3a6f5f5d31****
     *
     * @var string
     */
    public $asyncTaskId;
    protected $_name = [
        'asyncTaskId' => 'async_task_id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['async_task_id'] = $this->asyncTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuditLogExportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['async_task_id'])) {
            $model->asyncTaskId = $map['async_task_id'];
        }

        return $model;
    }
}
