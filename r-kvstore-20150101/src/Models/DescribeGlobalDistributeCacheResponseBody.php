<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalDistributeCacheResponseBody\globalDistributeCaches;
use AlibabaCloud\Tea\Model;

class DescribeGlobalDistributeCacheResponseBody extends Model
{
    /**
     * @var globalDistributeCaches[]
     */
    public $globalDistributeCaches;

    /**
     * @var int
     */
    public $pageNumber;

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
    public $totalRecordCount;
    protected $_name = [
        'globalDistributeCaches' => 'GlobalDistributeCaches',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'requestId'              => 'RequestId',
        'totalRecordCount'       => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalDistributeCaches) {
            $res['GlobalDistributeCaches'] = [];
            if (null !== $this->globalDistributeCaches && \is_array($this->globalDistributeCaches)) {
                $n = 0;
                foreach ($this->globalDistributeCaches as $item) {
                    $res['GlobalDistributeCaches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeGlobalDistributeCacheResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalDistributeCaches'])) {
            if (!empty($map['GlobalDistributeCaches'])) {
                $model->globalDistributeCaches = [];
                $n                             = 0;
                foreach ($map['GlobalDistributeCaches'] as $item) {
                    $model->globalDistributeCaches[$n++] = null !== $item ? globalDistributeCaches::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
