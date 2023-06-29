<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class CreateSlrRoleResponseBody extends Model
{
    /**
     * @description Indicates whether the service-linked role was created. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $hasPermission;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 208B016D-4CB9-4A85-96A5-0B8ED1EBF271
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hasPermission' => 'HasPermission',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasPermission) {
            $res['HasPermission'] = $this->hasPermission;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSlrRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasPermission'])) {
            $model->hasPermission = $map['HasPermission'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
