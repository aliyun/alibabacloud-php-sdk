<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetChatListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ChatItem;

class data extends Model
{
    /**
     * @var ChatItem[]
     */
    public $chatList;

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
    public $total;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'chatList' => 'chatList',
        'currentPage' => 'currentPage',
        'pageSize' => 'pageSize',
        'total' => 'total',
        'totalPage' => 'totalPage',
    ];

    public function validate()
    {
        if (\is_array($this->chatList)) {
            Model::validateArray($this->chatList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatList) {
            if (\is_array($this->chatList)) {
                $res['chatList'] = [];
                $n1 = 0;
                foreach ($this->chatList as $item1) {
                    $res['chatList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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
        if (isset($map['chatList'])) {
            if (!empty($map['chatList'])) {
                $model->chatList = [];
                $n1 = 0;
                foreach ($map['chatList'] as $item1) {
                    $model->chatList[$n1] = ChatItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
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
