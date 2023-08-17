<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ModifyAuditLogConfigResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the status of SQL audit is updated. Valid values:
     *
     *   **true**: The status of SQL audit is updated.
     *   **false**: The status of SQL audit is not updated.
     *
     * @example true
     *
     * @var bool
     */
    public $updateSucceed;
    protected $_name = [
        'requestId'     => 'RequestId',
        'updateSucceed' => 'UpdateSucceed',
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
        if (null !== $this->updateSucceed) {
            $res['UpdateSucceed'] = $this->updateSucceed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAuditLogConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UpdateSucceed'])) {
            $model->updateSucceed = $map['UpdateSucceed'];
        }

        return $model;
    }
}
