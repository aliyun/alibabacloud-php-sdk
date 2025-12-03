<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20170115\Models\ListClusterServiceConfigHistoryResponseBody\configHistoryList;

class ListClusterServiceConfigHistoryResponseBody extends Model
{
    /**
     * @var configHistoryList
     */
    public $configHistoryList;

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
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'configHistoryList' => 'ConfigHistoryList',
        'pageNumber' => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'requestId' => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (null !== $this->configHistoryList) {
            $this->configHistoryList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configHistoryList) {
            $res['ConfigHistoryList'] = null !== $this->configHistoryList ? $this->configHistoryList->toArray($noStream) : $this->configHistoryList;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigHistoryList'])) {
            $model->configHistoryList = configHistoryList::fromMap($map['ConfigHistoryList']);
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
