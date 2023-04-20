<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class QueryDBImportTaskStatusResponseBody extends Model
{
    /**
     * @example SERVER_BUSY
     *
     * @var string
     */
    public $detailMessage;

    /**
     * @example 0
     *
     * @var string
     */
    public $failedCount;

    /**
     * @example 692DCFEF-46DD-4EBB-B1DB-338E687DC260
     *
     * @var string
     */
    public $requestId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example 6
     *
     * @var string
     */
    public $successCount;
    protected $_name = [
        'detailMessage' => 'DetailMessage',
        'failedCount'   => 'FailedCount',
        'requestId'     => 'RequestId',
        'status'        => 'Status',
        'successCount'  => 'SuccessCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailMessage) {
            $res['DetailMessage'] = $this->detailMessage;
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDBImportTaskStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailMessage'])) {
            $model->detailMessage = $map['DetailMessage'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
