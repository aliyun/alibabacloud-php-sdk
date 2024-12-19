<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceLinkedRoleResponseBody extends Model
{
    /**
     * @description Whether the service-linked role permission is granted:
     * - false: Not granted.
     * @example true
     *
     * @var bool
     */
    public $entityRoleGrant;

    /**
     * @description Request ID.
     *
     * @example 02F8BBF3-2D61-5982-8911-EEB387BE3AF8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'entityRoleGrant' => 'EntityRoleGrant',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityRoleGrant) {
            $res['EntityRoleGrant'] = $this->entityRoleGrant;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceLinkedRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityRoleGrant'])) {
            $model->entityRoleGrant = $map['EntityRoleGrant'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
