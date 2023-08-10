<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsEtlJobVersionInfoResponseBody\dtsEtlJobVersionInfos;
use AlibabaCloud\Tea\Model;

class DescribeDtsEtlJobVersionInfoResponseBody extends Model
{
    /**
     * @description The details of ETL tasks.
     *
     * @var dtsEtlJobVersionInfos[]
     */
    public $dtsEtlJobVersionInfos;

    /**
     * @description The dynamic error code.
     *
     * @example 403
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @description The dynamic part in the error message.
     *
     * @example present environment is not support,so skip
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The error code. This example indicates that the specified ETL task ID is invalid.
     *
     * @example InvalidJobId
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message. This example indicates that the specified ETL task ID does not exist. In this case, the ETL task may have been deleted.
     *
     * @example The specified dts job id %s is not exists.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var string
     */
    public $httpStatusCode;

    /**
     * @description The page number of the returned page. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of records returned on the current page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageRecordCount;

    /**
     * @description The ID of the request.
     *
     * @example 224DB9F7-3100-4899-AB9C-C938BCCB43E7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. If the call failed, false is returned.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of records.
     *
     * @example 200
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'dtsEtlJobVersionInfos' => 'DtsEtlJobVersionInfos',
        'dynamicCode'           => 'DynamicCode',
        'dynamicMessage'        => 'DynamicMessage',
        'errCode'               => 'ErrCode',
        'errMessage'            => 'ErrMessage',
        'httpStatusCode'        => 'HttpStatusCode',
        'pageNumber'            => 'PageNumber',
        'pageRecordCount'       => 'PageRecordCount',
        'requestId'             => 'RequestId',
        'success'               => 'Success',
        'totalRecordCount'      => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsEtlJobVersionInfos) {
            $res['DtsEtlJobVersionInfos'] = [];
            if (null !== $this->dtsEtlJobVersionInfos && \is_array($this->dtsEtlJobVersionInfos)) {
                $n = 0;
                foreach ($this->dtsEtlJobVersionInfos as $item) {
                    $res['DtsEtlJobVersionInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDtsEtlJobVersionInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsEtlJobVersionInfos'])) {
            if (!empty($map['DtsEtlJobVersionInfos'])) {
                $model->dtsEtlJobVersionInfos = [];
                $n                            = 0;
                foreach ($map['DtsEtlJobVersionInfos'] as $item) {
                    $model->dtsEtlJobVersionInfos[$n++] = null !== $item ? dtsEtlJobVersionInfos::fromMap($item) : $item;
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
