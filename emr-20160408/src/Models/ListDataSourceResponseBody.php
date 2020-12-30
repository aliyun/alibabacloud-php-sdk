<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListDataSourceResponseBody\dataSourceList;
use AlibabaCloud\Tea\Model;

class ListDataSourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $total;

    /**
     * @var dataSourceList
     */
    public $dataSourceList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'pageSize'       => 'PageSize',
        'pageNumber'     => 'PageNumber',
        'total'          => 'Total',
        'dataSourceList' => 'DataSourceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->dataSourceList) {
            $res['DataSourceList'] = null !== $this->dataSourceList ? $this->dataSourceList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataSourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['DataSourceList'])) {
            $model->dataSourceList = dataSourceList::fromMap($map['DataSourceList']);
        }

        return $model;
    }
}
