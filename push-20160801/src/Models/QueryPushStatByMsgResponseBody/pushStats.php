<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByMsgResponseBody;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByMsgResponseBody\pushStats\pushStat;
use AlibabaCloud\Tea\Model;

class pushStats extends Model
{
    /**
     * @var pushStat[]
     */
    public $pushStat;
    protected $_name = [
        'pushStat' => 'PushStat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushStat) {
            $res['PushStat'] = [];
            if (null !== $this->pushStat && \is_array($this->pushStat)) {
                $n = 0;
                foreach ($this->pushStat as $item) {
                    $res['PushStat'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PushStat'])) {
            if (!empty($map['PushStat'])) {
                $model->pushStat = [];
                $n               = 0;
                foreach ($map['PushStat'] as $item) {
                    $model->pushStat[$n++] = null !== $item ? pushStat::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
