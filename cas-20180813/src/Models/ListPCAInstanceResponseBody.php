<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20180813\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20180813\Models\ListPCAInstanceResponseBody\PCAInstanceList;

class ListPCAInstanceResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var PCAInstanceList[]
     */
    public $PCAInstanceList;

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
        'currentPage' => 'CurrentPage',
        'PCAInstanceList' => 'PCAInstanceList',
        'requestId' => 'RequestId',
        'showSize' => 'ShowSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->PCAInstanceList)) {
            Model::validateArray($this->PCAInstanceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->PCAInstanceList) {
            if (\is_array($this->PCAInstanceList)) {
                $res['PCAInstanceList'] = [];
                $n1 = 0;
                foreach ($this->PCAInstanceList as $item1) {
                    $res['PCAInstanceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['PCAInstanceList'])) {
            if (!empty($map['PCAInstanceList'])) {
                $model->PCAInstanceList = [];
                $n1 = 0;
                foreach ($map['PCAInstanceList'] as $item1) {
                    $model->PCAInstanceList[$n1++] = PCAInstanceList::fromMap($item1);
                }
            }
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
