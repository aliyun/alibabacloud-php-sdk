<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ListJobGroupsAsyncRequest extends Model
{
    /**
     * @example 6243d904-939d-42ce-a8e4-886a139e77a3
     *
     * @var string
     */
    public $asyncTaskId;
    protected $_name = [
        'asyncTaskId' => 'AsyncTaskId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobGroupsAsyncRequest
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
