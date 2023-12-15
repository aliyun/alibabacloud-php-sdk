<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyEventInfoResponseBody extends Model
{
    /**
     * @description The error code returned.
     *
     * @example mst.errorcode.success.errormessage
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description Error eventId.
     *
     * @example 12343
     *
     * @var string
     */
    public $errorEventId;

    /**
     * @description The ID of the request.
     *
     * @example 224DB9F7-3100-4899-AB9C-C938BCCB43E7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of devices that were created.
     *
     * @example 1
     *
     * @var int
     */
    public $successCount;

    /**
     * @description Success eventId.
     *
     * @example 234221
     *
     * @var string
     */
    public $successEventId;
    protected $_name = [
        'errorCode'      => 'ErrorCode',
        'errorEventId'   => 'ErrorEventId',
        'requestId'      => 'RequestId',
        'successCount'   => 'SuccessCount',
        'successEventId' => 'SuccessEventId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorEventId) {
            $res['ErrorEventId'] = $this->errorEventId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->successEventId) {
            $res['SuccessEventId'] = $this->successEventId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyEventInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorEventId'])) {
            $model->errorEventId = $map['ErrorEventId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['SuccessEventId'])) {
            $model->successEventId = $map['SuccessEventId'];
        }

        return $model;
    }
}
