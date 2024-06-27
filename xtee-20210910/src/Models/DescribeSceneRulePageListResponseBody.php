<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSceneRulePageListResponseBody\resultObject;
use AlibabaCloud\Tea\Model;

class DescribeSceneRulePageListResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example AE7E6105-7DEB-5125-9B24-DCBC139F6CD2
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resultObject[]
     */
    public $resultObject;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalItem;

    /**
     * @example 9
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'currentPage'  => 'currentPage',
        'pageSize'     => 'pageSize',
        'requestId'    => 'requestId',
        'resultObject' => 'resultObject',
        'totalItem'    => 'totalItem',
        'totalPage'    => 'totalPage',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['resultObject'] = [];
            if (null !== $this->resultObject && \is_array($this->resultObject)) {
                $n = 0;
                foreach ($this->resultObject as $item) {
                    $res['resultObject'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeSceneRulePageListResponseBody
     */
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
                $n                   = 0;
                foreach ($map['resultObject'] as $item) {
                    $model->resultObject[$n++] = null !== $item ? resultObject::fromMap($item) : $item;
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
