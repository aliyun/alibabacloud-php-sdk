<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowInstanceResponseBody\DAGInstanceList;
use AlibabaCloud\Tea\Model;

class ListTaskFlowInstanceResponseBody extends Model
{
    /**
     * @description The information about the execution records returned.
     *
     * @var DAGInstanceList
     */
    public $DAGInstanceList;

    /**
     * @description The error code returned if the request fails.
     *
     * @example UnknownError
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
     * @description The ID of the request.
     *
     * @example 8CFF2295-8249-5287-B888-DBD4F0D76CB0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   **true**: The request is successful.
     *   **false**: The request fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of execution records returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'DAGInstanceList' => 'DAGInstanceList',
        'errorCode'       => 'ErrorCode',
        'errorMessage'    => 'ErrorMessage',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DAGInstanceList) {
            $res['DAGInstanceList'] = null !== $this->DAGInstanceList ? $this->DAGInstanceList->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
     * @return ListTaskFlowInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DAGInstanceList'])) {
            $model->DAGInstanceList = DAGInstanceList::fromMap($map['DAGInstanceList']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
