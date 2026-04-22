<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInterAuthStatisticsSummaryResponseBody\pageData;

class DescribeInterAuthStatisticsSummaryResponseBody extends Model
{
    /**
     * @var int
     */
    public $curPage;

    /**
     * @var pageData[]
     */
    public $pageData;

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
    public $totalPage;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'curPage' => 'CurPage',
        'pageData' => 'PageData',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalPage' => 'TotalPage',
        'totalSize' => 'TotalSize',
    ];

    public function validate()
    {
        if (\is_array($this->pageData)) {
            Model::validateArray($this->pageData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->curPage) {
            $res['CurPage'] = $this->curPage;
        }

        if (null !== $this->pageData) {
            if (\is_array($this->pageData)) {
                $res['PageData'] = [];
                $n1 = 0;
                foreach ($this->pageData as $item1) {
                    $res['PageData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
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
        if (isset($map['CurPage'])) {
            $model->curPage = $map['CurPage'];
        }

        if (isset($map['PageData'])) {
            if (!empty($map['PageData'])) {
                $model->pageData = [];
                $n1 = 0;
                foreach ($map['PageData'] as $item1) {
                    $model->pageData[$n1] = pageData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
