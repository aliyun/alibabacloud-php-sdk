<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceConfigHistoryResponseBody\configHistoryList;
use AlibabaCloud\Tea\Model;

class ListClusterServiceConfigHistoryResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var configHistoryList
     */
    public $configHistoryList;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'totalCount'        => 'TotalCount',
        'configHistoryList' => 'ConfigHistoryList',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'pageNumber'        => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->configHistoryList) {
            $res['ConfigHistoryList'] = null !== $this->configHistoryList ? $this->configHistoryList->toMap() : null;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterServiceConfigHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ConfigHistoryList'])) {
            $model->configHistoryList = configHistoryList::fromMap($map['ConfigHistoryList']);
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
