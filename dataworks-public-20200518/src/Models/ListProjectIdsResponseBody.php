<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListProjectIdsResponseBody extends Model
{
    /**
     * @description The IDs of the DataWorks workspaces.
     *
     * The IDs of the workspaces on which the specific Alibaba Cloud account has permissions were returned. In this example, a single workspace ID is used.
     * @var int[]
     */
    public $projectIds;

    /**
     * @description The ID of the request. You can troubleshoot errors based on the ID.
     *
     * @example 0b57ff7216278945532771749d****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'projectIds' => 'ProjectIds',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectIds) {
            $res['ProjectIds'] = $this->projectIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectIdsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectIds'])) {
            if (!empty($map['ProjectIds'])) {
                $model->projectIds = $map['ProjectIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
