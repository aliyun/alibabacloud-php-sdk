<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeCheckJobsResponseBody\checkJobs;
use AlibabaCloud\Tea\Model;

class DescribeCheckJobsResponseBody extends Model
{
    /**
     * @var checkJobs[]
     */
    public $checkJobs;

    /**
     * @var string
     */
    public $dynamicCode;

    /**
     * @var string
     */
    public $dynamicMessage;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageRecordCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'checkJobs'        => 'CheckJobs',
        'dynamicCode'      => 'DynamicCode',
        'dynamicMessage'   => 'DynamicMessage',
        'errCode'          => 'ErrCode',
        'errMessage'       => 'ErrMessage',
        'httpStatusCode'   => 'HttpStatusCode',
        'pageNumber'       => 'PageNumber',
        'pageRecordCount'  => 'PageRecordCount',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkJobs) {
            $res['CheckJobs'] = [];
            if (null !== $this->checkJobs && \is_array($this->checkJobs)) {
                $n = 0;
                foreach ($this->checkJobs as $item) {
                    $res['CheckJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCheckJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckJobs'])) {
            if (!empty($map['CheckJobs'])) {
                $model->checkJobs = [];
                $n                = 0;
                foreach ($map['CheckJobs'] as $item) {
                    $model->checkJobs[$n++] = null !== $item ? checkJobs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
