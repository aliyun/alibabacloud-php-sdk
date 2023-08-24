<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeAuditLogFilterResponseBody extends Model
{
    /**
     * @description The type of the audit log entries. Valid values:
     *
     *   **admin**: O\&M and management operations
     *   **slow**: slow query logs
     *   **query**: query operations
     *   **insert**: insert operations
     *   **update**: update operations
     *   **delete**: delete operations
     *   **command**: protocol commands such as the aggregate method
     *
     * @example admin,slow,insert,query,update,delete,command
     *
     * @var string
     */
    public $filter;

    /**
     * @description The ID of the request.
     *
     * @example 7BAFB0B3-2A54-5B65-B13E-3937CF08FEE6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The role of the node.
     *
     * @example logic
     *
     * @var string
     */
    public $roleType;
    protected $_name = [
        'filter'    => 'Filter',
        'requestId' => 'RequestId',
        'roleType'  => 'RoleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAuditLogFilterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}
