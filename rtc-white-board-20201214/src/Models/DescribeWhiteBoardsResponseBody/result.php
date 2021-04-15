<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\DescribeWhiteBoardsResponseBody;

use AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models\DescribeWhiteBoardsResponseBody\result\docList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var int
     */
    public $totalPage;

    /**
     * @description App信息列表
     *
     * @var docList[]
     */
    public $docList;
    protected $_name = [
        'totalNum'  => 'TotalNum',
        'totalPage' => 'TotalPage',
        'docList'   => 'DocList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->docList) {
            $res['DocList'] = [];
            if (null !== $this->docList && \is_array($this->docList)) {
                $n = 0;
                foreach ($this->docList as $item) {
                    $res['DocList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['DocList'])) {
            if (!empty($map['DocList'])) {
                $model->docList = [];
                $n              = 0;
                foreach ($map['DocList'] as $item) {
                    $model->docList[$n++] = null !== $item ? docList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
