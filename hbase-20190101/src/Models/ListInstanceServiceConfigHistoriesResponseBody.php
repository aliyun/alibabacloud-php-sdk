<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\ListInstanceServiceConfigHistoriesResponseBody\configureHistoryList;
use AlibabaCloud\Tea\Model;

class ListInstanceServiceConfigHistoriesResponseBody extends Model
{
    /**
     * @var configureHistoryList
     */
    public $configureHistoryList;

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
    public $pageRecordCount;

    /**
     * @example 658C1549-2C02-4FD9-9490-EB3B285F9DCA
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'configureHistoryList' => 'ConfigureHistoryList',
        'pageNumber'           => 'PageNumber',
        'pageRecordCount'      => 'PageRecordCount',
        'requestId'            => 'RequestId',
        'totalRecordCount'     => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configureHistoryList) {
            $res['ConfigureHistoryList'] = null !== $this->configureHistoryList ? $this->configureHistoryList->toMap() : null;
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
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
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
        if (isset($map['ConfigureHistoryList'])) {
            $model->configureHistoryList = configureHistoryList::fromMap($map['ConfigureHistoryList']);
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
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
