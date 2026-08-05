<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsMappingResponseBody\pathMappingItems;

class DescribePolarFsMappingResponseBody extends Model
{
    /**
     * @var string
     */
    public $defaultAccessKeyId;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageRecordCount;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var pathMappingItems[]
     */
    public $pathMappingItems;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalRecordCount;
    protected $_name = [
        'defaultAccessKeyId' => 'DefaultAccessKeyId',
        'pageNumber' => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'pageSize' => 'PageSize',
        'pathMappingItems' => 'PathMappingItems',
        'requestId' => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (\is_array($this->pathMappingItems)) {
            Model::validateArray($this->pathMappingItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultAccessKeyId) {
            $res['DefaultAccessKeyId'] = $this->defaultAccessKeyId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->pathMappingItems) {
            if (\is_array($this->pathMappingItems)) {
                $res['PathMappingItems'] = [];
                $n1 = 0;
                foreach ($this->pathMappingItems as $item1) {
                    $res['PathMappingItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DefaultAccessKeyId'])) {
            $model->defaultAccessKeyId = $map['DefaultAccessKeyId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PathMappingItems'])) {
            if (!empty($map['PathMappingItems'])) {
                $model->pathMappingItems = [];
                $n1 = 0;
                foreach ($map['PathMappingItems'] as $item1) {
                    $model->pathMappingItems[$n1] = pathMappingItems::fromMap($item1);
                    ++$n1;
                }
            }
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
