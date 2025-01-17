<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayListResponseBody\playList;

class DescribePlayListResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNum;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var playList[]
     */
    public $playList;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'pageNum'   => 'PageNum',
        'pageSize'  => 'PageSize',
        'playList'  => 'PlayList',
        'requestId' => 'RequestId',
        'totalNum'  => 'TotalNum',
    ];

    public function validate()
    {
        if (\is_array($this->playList)) {
            Model::validateArray($this->playList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->playList) {
            if (\is_array($this->playList)) {
                $res['PlayList'] = [];
                $n1              = 0;
                foreach ($this->playList as $item1) {
                    $res['PlayList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
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
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PlayList'])) {
            if (!empty($map['PlayList'])) {
                $model->playList = [];
                $n1              = 0;
                foreach ($map['PlayList'] as $item1) {
                    $model->playList[$n1++] = playList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
