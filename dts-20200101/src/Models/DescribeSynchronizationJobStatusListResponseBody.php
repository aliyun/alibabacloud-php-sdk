<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusListResponseBody\synchronizationJobListStatusList;
use AlibabaCloud\Tea\Model;

class DescribeSynchronizationJobStatusListResponseBody extends Model
{
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
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of data synchronization instances displayed on one page.
     *
     * @example 2
     *
     * @var int
     */
    public $pageRecordCount;

    /**
     * @description The ID of the request.
     *
     * @example 1413460B-138A-48D1-836C-B24EDDC1****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description The status of the data synchronization tasks.
     *
     * @var synchronizationJobListStatusList[]
     */
    public $synchronizationJobListStatusList;

    /**
     * @description The total number of data synchronization instances.
     *
     * @example 2
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'errCode'                          => 'ErrCode',
        'errMessage'                       => 'ErrMessage',
        'pageNumber'                       => 'PageNumber',
        'pageRecordCount'                  => 'PageRecordCount',
        'requestId'                        => 'RequestId',
        'success'                          => 'Success',
        'synchronizationJobListStatusList' => 'SynchronizationJobListStatusList',
        'totalRecordCount'                 => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
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
        if (null !== $this->synchronizationJobListStatusList) {
            $res['SynchronizationJobListStatusList'] = [];
            if (null !== $this->synchronizationJobListStatusList && \is_array($this->synchronizationJobListStatusList)) {
                $n = 0;
                foreach ($this->synchronizationJobListStatusList as $item) {
                    $res['SynchronizationJobListStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSynchronizationJobStatusListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
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
        if (isset($map['SynchronizationJobListStatusList'])) {
            if (!empty($map['SynchronizationJobListStatusList'])) {
                $model->synchronizationJobListStatusList = [];
                $n                                       = 0;
                foreach ($map['SynchronizationJobListStatusList'] as $item) {
                    $model->synchronizationJobListStatusList[$n++] = null !== $item ? synchronizationJobListStatusList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
