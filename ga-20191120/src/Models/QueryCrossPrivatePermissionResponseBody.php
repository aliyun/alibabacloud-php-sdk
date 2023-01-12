<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class QueryCrossPrivatePermissionResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $crossPrivatePermission;

    /**
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'crossPrivatePermission' => 'CrossPrivatePermission',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crossPrivatePermission) {
            $res['CrossPrivatePermission'] = $this->crossPrivatePermission;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCrossPrivatePermissionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CrossPrivatePermission'])) {
            $model->crossPrivatePermission = $map['CrossPrivatePermission'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
