<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetMsgIdListByQueueResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string[]
     */
    public $voList;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'voList' => 'VoList',
    ];

    public function validate()
    {
        if (\is_array($this->voList)) {
            Model::validateArray($this->voList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->voList) {
            if (\is_array($this->voList)) {
                $res['VoList'] = [];
                $n1 = 0;
                foreach ($this->voList as $item1) {
                    $res['VoList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['VoList'])) {
            if (!empty($map['VoList'])) {
                $model->voList = [];
                $n1 = 0;
                foreach ($map['VoList'] as $item1) {
                    $model->voList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
