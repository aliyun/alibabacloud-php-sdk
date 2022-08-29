<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayListResponseBody\playList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->playList) {
            $res['PlayList'] = [];
            if (null !== $this->playList && \is_array($this->playList)) {
                $n = 0;
                foreach ($this->playList as $item) {
                    $res['PlayList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribePlayListResponseBody
     */
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
                $n               = 0;
                foreach ($map['PlayList'] as $item) {
                    $model->playList[$n++] = null !== $item ? playList::fromMap($item) : $item;
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
