<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RevokeColumnPermissionResponseBody extends Model
{
    /**
     * @var bool
     */
    public $revokeSuccess;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'revokeSuccess' => 'RevokeSuccess',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->revokeSuccess) {
            $res['RevokeSuccess'] = $this->revokeSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeColumnPermissionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RevokeSuccess'])) {
            $model->revokeSuccess = $map['RevokeSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
