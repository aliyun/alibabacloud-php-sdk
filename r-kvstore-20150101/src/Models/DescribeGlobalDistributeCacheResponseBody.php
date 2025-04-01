<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalDistributeCacheResponseBody\globalDistributeCaches;

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
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (\is_array($this->globalDistributeCaches)) {
            Model::validateArray($this->globalDistributeCaches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalDistributeCaches) {
            if (\is_array($this->globalDistributeCaches)) {
                $res['GlobalDistributeCaches'] = [];
                $n1 = 0;
                foreach ($this->globalDistributeCaches as $item1) {
                    $res['GlobalDistributeCaches'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalDistributeCaches'])) {
            if (!empty($map['GlobalDistributeCaches'])) {
                $model->globalDistributeCaches = [];
                $n1 = 0;
                foreach ($map['GlobalDistributeCaches'] as $item1) {
                    $model->globalDistributeCaches[$n1++] = globalDistributeCaches::fromMap($item1);
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
