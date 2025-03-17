<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class UnbindConfigGroupResponseBody extends Model
{
    /**
     * @description The IDs of the configuration groups.
     *
     * @var string[]
     */
    public $groupIds;

    /**
     * @description The ID of the request.
     *
     * @example AD0FF13D-FC7D-56AD-934F-91C8487*****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupIds' => 'GroupIds',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupIds) {
            $res['GroupIds'] = $this->groupIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindConfigGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = $map['GroupIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
