<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOpLogResponseBody\opLogDetails;
use AlibabaCloud\Tea\Model;

class GetOpLogResponseBody extends Model
{
    /**
     * @description The error code returned if the request fails.
     *
     * @example 403
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned if the request fails.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The details of the operation log.
     *
     * @var opLogDetails
     */
    public $opLogDetails;

    /**
     * @description The ID of the request.
     *
     * @example 47D56208-DB1D-4FD3-BE32-300E43185488
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     * - **true**: The request is successful.
     * - **false**: The request fails.
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of operation logs that are returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'opLogDetails' => 'OpLogDetails',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'totalCount'   => 'TotalCount',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->opLogDetails) {
            $res['OpLogDetails'] = null !== $this->opLogDetails ? $this->opLogDetails->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOpLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['OpLogDetails'])) {
            $model->opLogDetails = opLogDetails::fromMap($map['OpLogDetails']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
