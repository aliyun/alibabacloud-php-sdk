<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RevokeTablePermissionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
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
