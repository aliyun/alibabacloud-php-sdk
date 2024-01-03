<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\SDK\OpenITag\V20220616\Models\SimpleSubtask\items;
use AlibabaCloud\Tea\Model;

class SimpleSubtask extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
     * @example FINISHED
     *
     * @var string
     */
    public $status;

    /**
     * @example 1500682457270333440
     *
     * @var int
     */
    public $subtaskId;
    protected $_name = [
        'items'     => 'Items',
        'status'    => 'Status',
        'subtaskId' => 'SubtaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subtaskId) {
            $res['SubtaskId'] = $this->subtaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SimpleSubtask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubtaskId'])) {
            $model->subtaskId = $map['SubtaskId'];
        }

        return $model;
    }
}
