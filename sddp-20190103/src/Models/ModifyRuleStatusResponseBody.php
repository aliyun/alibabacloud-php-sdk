<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class ModifyRuleStatusResponseBody extends Model
{
    /**
     * @description The IDs of sensitive data detection rules whose status failed to be changed. Multiple IDs are separated with commas (,).
     *
     * @example 1,2,3,4
     *
     * @var string
     */
    public $failedIds;

    /**
     * @description The ID of the request.
     *
     * @example 7C3AC882-E5A8-4855-BE77-B6837B695EF1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failedIds' => 'FailedIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedIds) {
            $res['FailedIds'] = $this->failedIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRuleStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedIds'])) {
            $model->failedIds = $map['FailedIds'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
