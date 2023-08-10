<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\dtsJobList;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList;
use AlibabaCloud\Tea\Model;

class DescribeDtsJobsResponseBody extends Model
{
    /**
     * @description The list of DTS tasks and the details of each task.
     *
     * @var dtsJobList[]
     */
    public $dtsJobList;

    /**
     * @description The dynamic error code. This parameter will be removed in the future.
     *
     * @example 403
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @description The dynamic part in the error message. The value of this parameter is used to replace the **%s** variable in the value of the **ErrMessage** parameter.
     *
     * >  For example, if the value of the **ErrMessage** parameter is **The Value of Input Parameter %s is not valid** and the value of the **DynamicMessage** parameter is **Type**, the specified **Type** parameter is invalid.
     * @example Type
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The error code returned if the call failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the call failed.
     *
     * @example The Value of Input Parameter %s is not valid.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The DTS tasks and the details of each task.
     *
     * @var etlDemoList[]
     */
    public $etlDemoList;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The page number of the returned page.
     *
     * @example 2
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageRecordCount;

    /**
     * @description The ID of the request.
     *
     * @example 621BB4F8-3016-4FAA-8D5A-5D3163CC****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of DTS tasks that meet the query condition.
     *
     * @example 15
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'dtsJobList'       => 'DtsJobList',
        'dynamicCode'      => 'DynamicCode',
        'dynamicMessage'   => 'DynamicMessage',
        'errCode'          => 'ErrCode',
        'errMessage'       => 'ErrMessage',
        'etlDemoList'      => 'EtlDemoList',
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
        if (null !== $this->dtsJobList) {
            $res['DtsJobList'] = [];
            if (null !== $this->dtsJobList && \is_array($this->dtsJobList)) {
                $n = 0;
                foreach ($this->dtsJobList as $item) {
                    $res['DtsJobList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->etlDemoList) {
            $res['EtlDemoList'] = [];
            if (null !== $this->etlDemoList && \is_array($this->etlDemoList)) {
                $n = 0;
                foreach ($this->etlDemoList as $item) {
                    $res['EtlDemoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeDtsJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsJobList'])) {
            if (!empty($map['DtsJobList'])) {
                $model->dtsJobList = [];
                $n                 = 0;
                foreach ($map['DtsJobList'] as $item) {
                    $model->dtsJobList[$n++] = null !== $item ? dtsJobList::fromMap($item) : $item;
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
        if (isset($map['EtlDemoList'])) {
            if (!empty($map['EtlDemoList'])) {
                $model->etlDemoList = [];
                $n                  = 0;
                foreach ($map['EtlDemoList'] as $item) {
                    $model->etlDemoList[$n++] = null !== $item ? etlDemoList::fromMap($item) : $item;
                }
            }
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
