<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListJobGroupsAsyncResponseBody\jobGroups;
use AlibabaCloud\Tea\Model;

class ListJobGroupsAsyncResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var jobGroups[]
     */
    public $jobGroups;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example true
     *
     * @var bool
     */
    public $timeout;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example true
     *
     * @var bool
     */
    public $vaild;
    protected $_name = [
        'code'           => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'jobGroups'      => 'JobGroups',
        'message'        => 'Message',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'timeout'        => 'Timeout',
        'totalCount'     => 'TotalCount',
        'vaild'          => 'Vaild',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->jobGroups) {
            $res['JobGroups'] = [];
            if (null !== $this->jobGroups && \is_array($this->jobGroups)) {
                $n = 0;
                foreach ($this->jobGroups as $item) {
                    $res['JobGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->vaild) {
            $res['Vaild'] = $this->vaild;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobGroupsAsyncResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['JobGroups'])) {
            if (!empty($map['JobGroups'])) {
                $model->jobGroups = [];
                $n                = 0;
                foreach ($map['JobGroups'] as $item) {
                    $model->jobGroups[$n++] = null !== $item ? jobGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Vaild'])) {
            $model->vaild = $map['Vaild'];
        }

        return $model;
    }
}
