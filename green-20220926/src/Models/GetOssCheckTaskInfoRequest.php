<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class GetOssCheckTaskInfoRequest extends Model
{
    /**
     * @example P_AAA**
     *
     * @var string
     */
    public $parentTaskId;
    protected $_name = [
        'parentTaskId' => 'ParentTaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentTaskId) {
            $res['ParentTaskId'] = $this->parentTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssCheckTaskInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentTaskId'])) {
            $model->parentTaskId = $map['ParentTaskId'];
        }

        return $model;
    }
}
