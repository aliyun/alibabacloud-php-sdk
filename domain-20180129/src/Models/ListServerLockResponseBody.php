<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\ListServerLockResponseBody\data;

class ListServerLockResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentPageNum;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @var bool
     */
    public $nextPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $prePage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalItemNum;

    /**
     * @var int
     */
    public $totalPageNum;
    protected $_name = [
        'currentPageNum' => 'CurrentPageNum',
        'data' => 'Data',
        'nextPage' => 'NextPage',
        'pageSize' => 'PageSize',
        'prePage' => 'PrePage',
        'requestId' => 'RequestId',
        'totalItemNum' => 'TotalItemNum',
        'totalPageNum' => 'TotalPageNum',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPageNum) {
            $res['CurrentPageNum'] = $this->currentPageNum;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextPage) {
            $res['NextPage'] = $this->nextPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->prePage) {
            $res['PrePage'] = $this->prePage;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalItemNum) {
            $res['TotalItemNum'] = $this->totalItemNum;
        }

        if (null !== $this->totalPageNum) {
            $res['TotalPageNum'] = $this->totalPageNum;
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
        if (isset($map['CurrentPageNum'])) {
            $model->currentPageNum = $map['CurrentPageNum'];
        }

        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1] = data::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextPage'])) {
            $model->nextPage = $map['NextPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PrePage'])) {
            $model->prePage = $map['PrePage'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalItemNum'])) {
            $model->totalItemNum = $map['TotalItemNum'];
        }

        if (isset($map['TotalPageNum'])) {
            $model->totalPageNum = $map['TotalPageNum'];
        }

        return $model;
    }
}
