<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetChatSessionListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetChatSessionListResponseBody\data\sessionList;

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
     * @var sessionList[]
     */
    public $sessionList;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'currentPage' => 'currentPage',
        'pageSize' => 'pageSize',
        'sessionList' => 'sessionList',
        'total' => 'total',
        'totalPage' => 'totalPage',
    ];

    public function validate()
    {
        if (\is_array($this->sessionList)) {
            Model::validateArray($this->sessionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->sessionList) {
            if (\is_array($this->sessionList)) {
                $res['sessionList'] = [];
                $n1 = 0;
                foreach ($this->sessionList as $item1) {
                    $res['sessionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        if (null !== $this->totalPage) {
            $res['totalPage'] = $this->totalPage;
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
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['sessionList'])) {
            if (!empty($map['sessionList'])) {
                $model->sessionList = [];
                $n1 = 0;
                foreach ($map['sessionList'] as $item1) {
                    $model->sessionList[$n1++] = sessionList::fromMap($item1);
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        if (isset($map['totalPage'])) {
            $model->totalPage = $map['totalPage'];
        }

        return $model;
    }
}
