<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeServiceLinkedRoleStatusResponseBody\roleStatus;
use AlibabaCloud\Tea\Model;

class DescribeServiceLinkedRoleStatusResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 39CE98F4-88C0-4539-B906-6B542E5C07B9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status information about the service-linked role.
     *
     * @var roleStatus
     */
    public $roleStatus;
    protected $_name = [
        'requestId'  => 'RequestId',
        'roleStatus' => 'RoleStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->roleStatus) {
            $res['RoleStatus'] = null !== $this->roleStatus ? $this->roleStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceLinkedRoleStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RoleStatus'])) {
            $model->roleStatus = roleStatus::fromMap($map['RoleStatus']);
        }

        return $model;
    }
}
