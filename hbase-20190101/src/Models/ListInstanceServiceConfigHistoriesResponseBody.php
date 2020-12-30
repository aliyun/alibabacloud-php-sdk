<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\ListInstanceServiceConfigHistoriesResponseBody\configureHistoryList;
use AlibabaCloud\Tea\Model;

class ListInstanceServiceConfigHistoriesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalRecordCount;

    /**
     * @var int
     */
    public $pageRecordCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var configureHistoryList
     */
    public $configureHistoryList;
    protected $_name = [
        'totalRecordCount'     => 'TotalRecordCount',
        'pageRecordCount'      => 'PageRecordCount',
        'requestId'            => 'RequestId',
        'pageNumber'           => 'PageNumber',
        'configureHistoryList' => 'ConfigureHistoryList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->configureHistoryList) {
            $res['ConfigureHistoryList'] = null !== $this->configureHistoryList ? $this->configureHistoryList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceServiceConfigHistoriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['ConfigureHistoryList'])) {
            $model->configureHistoryList = configureHistoryList::fromMap($map['ConfigureHistoryList']);
        }

        return $model;
    }
}
