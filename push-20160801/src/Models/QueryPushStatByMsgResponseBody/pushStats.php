<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByMsgResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryPushStatByMsgResponseBody\pushStats\pushStat;

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
        if (\is_array($this->pushStat)) {
            Model::validateArray($this->pushStat);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pushStat) {
            if (\is_array($this->pushStat)) {
                $res['PushStat'] = [];
                $n1 = 0;
                foreach ($this->pushStat as $item1) {
                    $res['PushStat'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PushStat'])) {
            if (!empty($map['PushStat'])) {
                $model->pushStat = [];
                $n1 = 0;
                foreach ($map['PushStat'] as $item1) {
                    $model->pushStat[$n1] = pushStat::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
