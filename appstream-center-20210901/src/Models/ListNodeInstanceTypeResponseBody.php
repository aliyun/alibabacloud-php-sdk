<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeResponseBody\nodeInstanceTypeModels;

class ListNodeInstanceTypeResponseBody extends Model
{
    /**
     * @var nodeInstanceTypeModels[]
     */
    public $nodeInstanceTypeModels;

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
    public $totalCount;
    protected $_name = [
        'nodeInstanceTypeModels' => 'NodeInstanceTypeModels',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->nodeInstanceTypeModels)) {
            Model::validateArray($this->nodeInstanceTypeModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeInstanceTypeModels) {
            if (\is_array($this->nodeInstanceTypeModels)) {
                $res['NodeInstanceTypeModels'] = [];
                $n1 = 0;
                foreach ($this->nodeInstanceTypeModels as $item1) {
                    $res['NodeInstanceTypeModels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['NodeInstanceTypeModels'])) {
            if (!empty($map['NodeInstanceTypeModels'])) {
                $model->nodeInstanceTypeModels = [];
                $n1 = 0;
                foreach ($map['NodeInstanceTypeModels'] as $item1) {
                    $model->nodeInstanceTypeModels[$n1++] = nodeInstanceTypeModels::fromMap($item1);
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

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
