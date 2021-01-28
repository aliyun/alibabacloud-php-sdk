<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalDistributeCacheResponseBody\globalDistributeCaches;
use AlibabaCloud\Tea\Model;

class DescribeGlobalDistributeCacheResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalRecordCount;

    /**
     * @var globalDistributeCaches[]
     */
    public $globalDistributeCaches;

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
        'totalRecordCount'       => 'TotalRecordCount',
        'globalDistributeCaches' => 'GlobalDistributeCaches',
        'pageSize'               => 'PageSize',
        'requestId'              => 'RequestId',
        'pageNumber'             => 'PageNumber',
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
        if (null !== $this->globalDistributeCaches) {
            $res['GlobalDistributeCaches'] = [];
            if (null !== $this->globalDistributeCaches && \is_array($this->globalDistributeCaches)) {
                $n = 0;
                foreach ($this->globalDistributeCaches as $item) {
                    $res['GlobalDistributeCaches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeGlobalDistributeCacheResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }
        if (isset($map['GlobalDistributeCaches'])) {
            if (!empty($map['GlobalDistributeCaches'])) {
                $model->globalDistributeCaches = [];
                $n                             = 0;
                foreach ($map['GlobalDistributeCaches'] as $item) {
                    $model->globalDistributeCaches[$n++] = null !== $item ? globalDistributeCaches::fromMap($item) : $item;
                }
            }
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
