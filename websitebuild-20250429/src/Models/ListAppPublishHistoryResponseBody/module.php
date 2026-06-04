<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppPublishHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppPublishHistoryResponseBody\module\history;

class module extends Model
{
    /**
     * @var int
     */
    public $currentPublishOrderId;

    /**
     * @var history[]
     */
    public $history;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'currentPublishOrderId' => 'CurrentPublishOrderId',
        'history' => 'History',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->history)) {
            Model::validateArray($this->history);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPublishOrderId) {
            $res['CurrentPublishOrderId'] = $this->currentPublishOrderId;
        }

        if (null !== $this->history) {
            if (\is_array($this->history)) {
                $res['History'] = [];
                $n1 = 0;
                foreach ($this->history as $item1) {
                    $res['History'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['CurrentPublishOrderId'])) {
            $model->currentPublishOrderId = $map['CurrentPublishOrderId'];
        }

        if (isset($map['History'])) {
            if (!empty($map['History'])) {
                $model->history = [];
                $n1 = 0;
                foreach ($map['History'] as $item1) {
                    $model->history[$n1] = history::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
