<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListTriggersResponseBody\triggers;
use AlibabaCloud\Tea\Model;

class ListTriggersResponseBody extends Model
{
    /**
     * @description 用来返回更多的查询结果。如果这个值没有返回，则说明没有更多结果
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Trigger列表
     *
     * @var triggers[]
     */
    public $triggers;
    protected $_name = [
        'nextToken' => 'nextToken',
        'triggers'  => 'triggers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->triggers) {
            $res['triggers'] = [];
            if (null !== $this->triggers && \is_array($this->triggers)) {
                $n = 0;
                foreach ($this->triggers as $item) {
                    $res['triggers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTriggersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['triggers'])) {
            if (!empty($map['triggers'])) {
                $model->triggers = [];
                $n               = 0;
                foreach ($map['triggers'] as $item) {
                    $model->triggers[$n++] = null !== $item ? triggers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
