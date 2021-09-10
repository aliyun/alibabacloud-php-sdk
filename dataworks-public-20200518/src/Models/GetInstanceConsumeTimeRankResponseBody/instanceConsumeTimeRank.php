<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceConsumeTimeRankResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceConsumeTimeRankResponseBody\instanceConsumeTimeRank\consumeTimeRank;
use AlibabaCloud\Tea\Model;

class instanceConsumeTimeRank extends Model
{
    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var consumeTimeRank[]
     */
    public $consumeTimeRank;
    protected $_name = [
        'updateTime'      => 'UpdateTime',
        'consumeTimeRank' => 'ConsumeTimeRank',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->consumeTimeRank) {
            $res['ConsumeTimeRank'] = [];
            if (null !== $this->consumeTimeRank && \is_array($this->consumeTimeRank)) {
                $n = 0;
                foreach ($this->consumeTimeRank as $item) {
                    $res['ConsumeTimeRank'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceConsumeTimeRank
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ConsumeTimeRank'])) {
            if (!empty($map['ConsumeTimeRank'])) {
                $model->consumeTimeRank = [];
                $n                      = 0;
                foreach ($map['ConsumeTimeRank'] as $item) {
                    $model->consumeTimeRank[$n++] = null !== $item ? consumeTimeRank::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
