<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class DeleteServiceLinkedRoleResponseBody extends Model
{
    /**
     * @description The ID of the deletion task.
     *
     * @example task/acs-service-role/polardb.aliyuncs.com/AliyunServiceRoleForPolarDB/64c4f9cc-fac2-4692-ae1b-804ae4b9****
     *
     * @var string
     */
    public $deletionTaskId;

    /**
     * @description The ID of the request.
     *
     * @example B595E5BF-FF5F-4E7F-B95A-B90FE242FEB6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deletionTaskId' => 'DeletionTaskId',
        'requestId'      => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteServiceLinkedRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletionTaskId'])) {
            $model->deletionTaskId = $map['DeletionTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
