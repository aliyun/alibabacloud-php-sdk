<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListCallbackApiIdsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 回调列表
     *
     * @var bool[]
     */
    public $spis;

    /**
     * @description 事件输出列表
     *
     * @var bool[]
     */
    public $events;
    protected $_name = [
        'spis'   => 'Spis',
        'events' => 'Events',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spis) {
            $res['Spis'] = $this->spis;
        }
        if (null !== $this->events) {
            $res['Events'] = $this->events;
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
        if (isset($map['Spis'])) {
            $model->spis = $map['Spis'];
        }
        if (isset($map['Events'])) {
            $model->events = $map['Events'];
        }

        return $model;
    }
}
