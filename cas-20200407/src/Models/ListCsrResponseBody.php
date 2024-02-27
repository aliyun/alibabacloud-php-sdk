<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\SDK\Cas\V20200407\Models\ListCsrResponseBody\csrList;
use AlibabaCloud\Tea\Model;

class ListCsrResponseBody extends Model
{
    /**
     * @var csrList[]
     */
    public $csrList;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example E865F6AD-0294-4A24-A58B-DAC6BE2BDD20
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $showSize;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'csrList'     => 'CsrList',
        'currentPage' => 'CurrentPage',
        'requestId'   => 'RequestId',
        'showSize'    => 'ShowSize',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csrList) {
            $res['CsrList'] = [];
            if (null !== $this->csrList && \is_array($this->csrList)) {
                $n = 0;
                foreach ($this->csrList as $item) {
                    $res['CsrList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCsrResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CsrList'])) {
            if (!empty($map['CsrList'])) {
                $model->csrList = [];
                $n              = 0;
                foreach ($map['CsrList'] as $item) {
                    $model->csrList[$n++] = null !== $item ? csrList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
