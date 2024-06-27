<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingDataSourcesResponseBody\dataSourceItems;
use AlibabaCloud\Tea\Model;

class ListStreamingDataSourcesResponseBody extends Model
{
    /**
     * @description The queried data sources.
     *
     * @var dataSourceItems[]
     */
    public $dataSourceItems;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The request ID.
     *
     * @example B4CAF581-2AC7-41AD-8940-D56DF7AADF5B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'dataSourceItems'  => 'DataSourceItems',
        'pageNumber'       => 'PageNumber',
        'requestId'        => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceItems) {
            $res['DataSourceItems'] = [];
            if (null !== $this->dataSourceItems && \is_array($this->dataSourceItems)) {
                $n = 0;
                foreach ($this->dataSourceItems as $item) {
                    $res['DataSourceItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
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
     * @return ListStreamingDataSourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceItems'])) {
            if (!empty($map['DataSourceItems'])) {
                $model->dataSourceItems = [];
                $n                      = 0;
                foreach ($map['DataSourceItems'] as $item) {
                    $model->dataSourceItems[$n++] = null !== $item ? dataSourceItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
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
