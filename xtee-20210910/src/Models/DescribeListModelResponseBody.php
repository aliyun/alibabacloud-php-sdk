<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeListModelResponseBody\resultObject;

class DescribeListModelResponseBody extends Model
{
    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resultObject[]
     */
    public $resultObject;

    /**
     * @var string
     */
    public $totalItem;

    /**
     * @var string
     */
    public $totalPage;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'resultObject' => 'ResultObject',
        'totalItem' => 'TotalItem',
        'totalPage' => 'TotalPage',
    ];

    public function validate()
    {
        if (\is_array($this->resultObject)) {
            Model::validateArray($this->resultObject);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resultObject) {
            if (\is_array($this->resultObject)) {
                $res['ResultObject'] = [];
                $n1 = 0;
                foreach ($this->resultObject as $item1) {
                    $res['ResultObject'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalItem) {
            $res['TotalItem'] = $this->totalItem;
        }

        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResultObject'])) {
            if (!empty($map['ResultObject'])) {
                $model->resultObject = [];
                $n1 = 0;
                foreach ($map['ResultObject'] as $item1) {
                    $model->resultObject[$n1] = resultObject::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalItem'])) {
            $model->totalItem = $map['TotalItem'];
        }

        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
