<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\consumerInfos\records;

use AlibabaCloud\Dara\Model;

class operations extends Model
{
    /**
     * @var bool
     */
    public $deadMessage;

    /**
     * @var int
     */
    public $invisibleTime;

    /**
     * @var string
     */
    public $operateTime;

    /**
     * @var string
     */
    public $operateType;
    protected $_name = [
        'deadMessage' => 'deadMessage',
        'invisibleTime' => 'invisibleTime',
        'operateTime' => 'operateTime',
        'operateType' => 'operateType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deadMessage) {
            $res['deadMessage'] = $this->deadMessage;
        }

        if (null !== $this->invisibleTime) {
            $res['invisibleTime'] = $this->invisibleTime;
        }

        if (null !== $this->operateTime) {
            $res['operateTime'] = $this->operateTime;
        }

        if (null !== $this->operateType) {
            $res['operateType'] = $this->operateType;
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
        if (isset($map['deadMessage'])) {
            $model->deadMessage = $map['deadMessage'];
        }

        if (isset($map['invisibleTime'])) {
            $model->invisibleTime = $map['invisibleTime'];
        }

        if (isset($map['operateTime'])) {
            $model->operateTime = $map['operateTime'];
        }

        if (isset($map['operateType'])) {
            $model->operateType = $map['operateType'];
        }

        return $model;
    }
}
