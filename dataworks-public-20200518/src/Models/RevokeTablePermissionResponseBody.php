<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RevokeTablePermissionResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 0bc1ec92159376****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the permissions are revoked.
     *
     * @example true
     *
     * @var bool
     */
    public $revokeSuccess;
    protected $_name = [
        'requestId'     => 'RequestId',
        'revokeSuccess' => 'RevokeSuccess',
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
        if (null !== $this->revokeSuccess) {
            $res['RevokeSuccess'] = $this->revokeSuccess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeTablePermissionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RevokeSuccess'])) {
            $model->revokeSuccess = $map['RevokeSuccess'];
        }

        return $model;
    }
}
