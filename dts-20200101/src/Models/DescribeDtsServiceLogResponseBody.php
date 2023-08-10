<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsServiceLogResponseBody\serviceLogContexts;
use AlibabaCloud\Tea\Model;

class DescribeDtsServiceLogResponseBody extends Model
{
    /**
     * @description The dynamic error code. This parameter will be removed soon.
     *
     * @example 403
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @description The dynamic part in the error message. This parameter is used to replace the \*\*%s\*\* variable in the **ErrMessage** parameter.
     *
     * @example DtsJobId
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The error code returned if the request fails.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the request fails.
     *
     * @example The Value of Input Parameter %s is not valid.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of log entries returned per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageRecordCount;

    /**
     * @description The ID of the request.
     *
     * @example F87DF250-952C-47FE-8A02-69414FAA****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the logs.
     *
     * @var serviceLogContexts[]
     */
    public $serviceLogContexts;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of logs that meet the query conditions.
     *
     * @example 35
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'dynamicCode'        => 'DynamicCode',
        'dynamicMessage'     => 'DynamicMessage',
        'errCode'            => 'ErrCode',
        'errMessage'         => 'ErrMessage',
        'httpStatusCode'     => 'HttpStatusCode',
        'pageNumber'         => 'PageNumber',
        'pageRecordCount'    => 'PageRecordCount',
        'requestId'          => 'RequestId',
        'serviceLogContexts' => 'ServiceLogContexts',
        'success'            => 'Success',
        'totalRecordCount'   => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->serviceLogContexts) {
            $res['ServiceLogContexts'] = [];
            if (null !== $this->serviceLogContexts && \is_array($this->serviceLogContexts)) {
                $n = 0;
                foreach ($this->serviceLogContexts as $item) {
                    $res['ServiceLogContexts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeDtsServiceLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ServiceLogContexts'])) {
            if (!empty($map['ServiceLogContexts'])) {
                $model->serviceLogContexts = [];
                $n                         = 0;
                foreach ($map['ServiceLogContexts'] as $item) {
                    $model->serviceLogContexts[$n++] = null !== $item ? serviceLogContexts::fromMap($item) : $item;
                }
            }
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
