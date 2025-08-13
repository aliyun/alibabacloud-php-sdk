<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSceneRulePageListResponseBody\resultObject;

class DescribeSceneRulePageListResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
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
     * @var int
     */
    public $totalItem;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'currentPage' => 'currentPage',
        'pageSize' => 'pageSize',
        'requestId' => 'requestId',
        'resultObject' => 'resultObject',
        'totalItem' => 'totalItem',
        'totalPage' => 'totalPage',
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
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->resultObject) {
            if (\is_array($this->resultObject)) {
                $res['resultObject'] = [];
                $n1 = 0;
                foreach ($this->resultObject as $item1) {
                    $res['resultObject'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalItem) {
            $res['totalItem'] = $this->totalItem;
        }

        if (null !== $this->totalPage) {
            $res['totalPage'] = $this->totalPage;
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
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['resultObject'])) {
            if (!empty($map['resultObject'])) {
                $model->resultObject = [];
                $n1 = 0;
                foreach ($map['resultObject'] as $item1) {
                    $model->resultObject[$n1] = resultObject::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalItem'])) {
            $model->totalItem = $map['totalItem'];
        }

        if (isset($map['totalPage'])) {
            $model->totalPage = $map['totalPage'];
        }

        return $model;
    }
}
