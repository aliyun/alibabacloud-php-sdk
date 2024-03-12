<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListInterveneCntResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $cntList;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageCnt;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'cntList'   => 'CntList',
        'pageCnt'   => 'PageCnt',
        'pageIndex' => 'PageIndex',
        'pageSize'  => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cntList) {
            $res['CntList'] = $this->cntList;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CntList'])) {
            if (!empty($map['CntList'])) {
                $model->cntList = $map['CntList'];
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
