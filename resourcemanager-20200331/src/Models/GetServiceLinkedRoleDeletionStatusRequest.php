<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class GetServiceLinkedRoleDeletionStatusRequest extends Model
{
    /**
     * @description The ID of the deletion task.
     *
     * @example task/acs-service-role/hdr.aliyuncs.com/AliyunServiceRoleForHdr/c4d22c52-247f-4ee1-83a2-6c0460bd****
     *
     * @var string
     */
    public $deletionTaskId;
    protected $_name = [
        'deletionTaskId' => 'DeletionTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletionTaskId) {
            $res['DeletionTaskId'] = $this->deletionTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceLinkedRoleDeletionStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletionTaskId'])) {
            $model->deletionTaskId = $map['DeletionTaskId'];
        }

        return $model;
    }
}
