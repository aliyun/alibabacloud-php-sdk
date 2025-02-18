<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200407\Models\ListCsrResponseBody\csrList;

class ListCsrResponseBody extends Model
{
    /**
     * @var csrList[]
     */
    public $csrList;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $showSize;
    /**
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
        if (\is_array($this->csrList)) {
            Model::validateArray($this->csrList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->csrList) {
            if (\is_array($this->csrList)) {
                $res['CsrList'] = [];
                $n1             = 0;
                foreach ($this->csrList as $item1) {
                    $res['CsrList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CsrList'])) {
            if (!empty($map['CsrList'])) {
                $model->csrList = [];
                $n1             = 0;
                foreach ($map['CsrList'] as $item1) {
                    $model->csrList[$n1++] = csrList::fromMap($item1);
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
