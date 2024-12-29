<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsJobsResponseBody\APSJobs;
use AlibabaCloud\Tea\Model;

class DescribeApsJobsResponseBody extends Model
{
    /**
     * @example -
     *
     * @var APSJobs[]
     */
    public $APSJobs;

    /**
     * @example ok
     *
     * @var string
     */
    public $code;

    /**
     * @example ok
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 30
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example ******-7F9D-5DBD-993E-******
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @example 0
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'APSJobs'        => 'APSJobs',
        'code'           => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->APSJobs) {
            $res['APSJobs'] = [];
            if (null !== $this->APSJobs && \is_array($this->APSJobs)) {
                $n = 0;
                foreach ($this->APSJobs as $item) {
                    $res['APSJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApsJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['APSJobs'])) {
            if (!empty($map['APSJobs'])) {
                $model->APSJobs = [];
                $n              = 0;
                foreach ($map['APSJobs'] as $item) {
                    $model->APSJobs[$n++] = null !== $item ? APSJobs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
