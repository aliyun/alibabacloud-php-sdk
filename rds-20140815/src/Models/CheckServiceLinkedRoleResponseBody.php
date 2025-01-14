<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CheckServiceLinkedRoleResponseBody extends Model
{
    /**
     * @description Indicates whether an SLR is created.
     *
     * @example true
     *
     * @var string
     */
    public $hasServiceLinkedRole;

    /**
     * @description The request ID.
     *
     * @example AB44DC0A-7E77-442A-97A9-C6418694CB22
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $requireServiceLinkedRole;
    protected $_name = [
        'hasServiceLinkedRole'     => 'HasServiceLinkedRole',
        'requestId'                => 'RequestId',
        'requireServiceLinkedRole' => 'RequireServiceLinkedRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasServiceLinkedRole) {
            $res['HasServiceLinkedRole'] = $this->hasServiceLinkedRole;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requireServiceLinkedRole) {
            $res['RequireServiceLinkedRole'] = $this->requireServiceLinkedRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckServiceLinkedRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasServiceLinkedRole'])) {
            $model->hasServiceLinkedRole = $map['HasServiceLinkedRole'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequireServiceLinkedRole'])) {
            $model->requireServiceLinkedRole = $map['RequireServiceLinkedRole'];
        }

        return $model;
    }
}
