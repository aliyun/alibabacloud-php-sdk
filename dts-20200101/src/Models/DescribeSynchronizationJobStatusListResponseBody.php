<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusListResponseBody\synchronizationJobListStatusList;
use AlibabaCloud\Tea\Model;

class DescribeSynchronizationJobStatusListResponseBody extends Model
{
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
     * @var string
     */
    public $success;

    /**
     * @var synchronizationJobListStatusList[]
     */
    public $synchronizationJobListStatusList;

    /**
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
