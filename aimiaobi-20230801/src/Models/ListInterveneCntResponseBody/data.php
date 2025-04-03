<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneCntResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $cntList;

    /**
     * @var int
     */
    public $pageCnt;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'cntList' => 'CntList',
        'pageCnt' => 'PageCnt',
        'pageIndex' => 'PageIndex',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->cntList)) {
            Model::validateArray($this->cntList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cntList) {
            if (\is_array($this->cntList)) {
                $res['CntList'] = [];
                $n1 = 0;
                foreach ($this->cntList as $item1) {
                    $res['CntList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pageCnt) {
            $res['PageCnt'] = $this->pageCnt;
        }

        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['CntList'])) {
            if (!empty($map['CntList'])) {
                $model->cntList = [];
                $n1 = 0;
                foreach ($map['CntList'] as $item1) {
                    $model->cntList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PageCnt'])) {
            $model->pageCnt = $map['PageCnt'];
        }

        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
