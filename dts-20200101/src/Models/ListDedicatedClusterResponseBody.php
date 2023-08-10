<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\ListDedicatedClusterResponseBody\dedicatedClusterStatusList;
use AlibabaCloud\Tea\Model;

class ListDedicatedClusterResponseBody extends Model
{
    /**
     * @description The statuses of all clusters.
     *
     * @var dedicatedClusterStatusList
     */
    public $dedicatedClusterStatusList;

    /**
     * @description The error code returned if the request failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example The Value of Input Parameter %s is not valid.
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
     * @description The page number of the returned page. The value must be an integer that is greater than 0. Default value: 1.
     *
     * @example 1
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
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description The total number of clusters that meet the query condition.
     *
     * @example 15
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'dedicatedClusterStatusList' => 'DedicatedClusterStatusList',
        'errCode'                    => 'ErrCode',
        'errMessage'                 => 'ErrMessage',
        'httpStatusCode'             => 'HttpStatusCode',
        'pageNumber'                 => 'PageNumber',
        'pageRecordCount'            => 'PageRecordCount',
        'requestId'                  => 'RequestId',
        'success'                    => 'Success',
        'totalRecordCount'           => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedClusterStatusList) {
            $res['DedicatedClusterStatusList'] = null !== $this->dedicatedClusterStatusList ? $this->dedicatedClusterStatusList->toMap() : null;
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
     * @return ListDedicatedClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedClusterStatusList'])) {
            $model->dedicatedClusterStatusList = dedicatedClusterStatusList::fromMap($map['DedicatedClusterStatusList']);
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
