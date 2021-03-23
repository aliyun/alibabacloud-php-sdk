<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalDistributeCacheResponseBody\globalDistributeCaches;
use AlibabaCloud\Tea\Model;

class DescribeGlobalDistributeCacheResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalRecordCount;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var globalDistributeCaches[]
     */
    public $globalDistributeCaches;
    protected $_name = [
        'requestId'              => 'RequestId',
        'totalRecordCount'       => 'TotalRecordCount',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'globalDistributeCaches' => 'GlobalDistributeCaches',
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
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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

        return $model;
    }
}
