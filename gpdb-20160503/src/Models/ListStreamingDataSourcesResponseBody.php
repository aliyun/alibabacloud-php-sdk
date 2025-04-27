<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingDataSourcesResponseBody\dataSourceItems;

class ListStreamingDataSourcesResponseBody extends Model
{
    /**
     * @var dataSourceItems[]
     */
    public $dataSourceItems;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'dataSourceItems' => 'DataSourceItems',
        'pageNumber' => 'PageNumber',
        'requestId' => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (\is_array($this->dataSourceItems)) {
            Model::validateArray($this->dataSourceItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceItems) {
            if (\is_array($this->dataSourceItems)) {
                $res['DataSourceItems'] = [];
                $n1 = 0;
                foreach ($this->dataSourceItems as $item1) {
                    $res['DataSourceItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceItems'])) {
            if (!empty($map['DataSourceItems'])) {
                $model->dataSourceItems = [];
                $n1 = 0;
                foreach ($map['DataSourceItems'] as $item1) {
                    $model->dataSourceItems[$n1++] = dataSourceItems::fromMap($item1);
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
