<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListDisasterRecoveryCheckpointsResponseBody\data\list_\targetProgress;

use AlibabaCloud\Dara\Model;

class progressData extends Model
{
    /**
     * @var int
     */
    public $consumeTimestamp;
    protected $_name = [
        'consumeTimestamp' => 'consumeTimestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumeTimestamp) {
            $res['consumeTimestamp'] = $this->consumeTimestamp;
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
        if (isset($map['consumeTimestamp'])) {
            $model->consumeTimestamp = $map['consumeTimestamp'];
        }

        return $model;
    }
}
