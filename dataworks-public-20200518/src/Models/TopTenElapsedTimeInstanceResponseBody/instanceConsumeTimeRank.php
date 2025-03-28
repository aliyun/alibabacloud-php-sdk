<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenElapsedTimeInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenElapsedTimeInstanceResponseBody\instanceConsumeTimeRank\consumeTimeRank;

class instanceConsumeTimeRank extends Model
{
    /**
     * @var consumeTimeRank[]
     */
    public $consumeTimeRank;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'consumeTimeRank' => 'ConsumeTimeRank',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->consumeTimeRank)) {
            Model::validateArray($this->consumeTimeRank);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumeTimeRank) {
            if (\is_array($this->consumeTimeRank)) {
                $res['ConsumeTimeRank'] = [];
                $n1 = 0;
                foreach ($this->consumeTimeRank as $item1) {
                    $res['ConsumeTimeRank'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ConsumeTimeRank'])) {
            if (!empty($map['ConsumeTimeRank'])) {
                $model->consumeTimeRank = [];
                $n1 = 0;
                foreach ($map['ConsumeTimeRank'] as $item1) {
                    $model->consumeTimeRank[$n1++] = consumeTimeRank::fromMap($item1);
                }
            }
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
