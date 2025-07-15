<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class RecoverLiveMessageDeletedGroupResponseBody extends Model
{
    /**
     * @description The ID of the group that was restored.
     *
     * @example grouptest
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the request.
     *
     * @example B95BE680-5A6A-1CAD-8AB1-09DFF5D6****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupId' => 'GroupId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecoverLiveMessageDeletedGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
