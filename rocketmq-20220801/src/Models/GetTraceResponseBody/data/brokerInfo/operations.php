<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\brokerInfo;

use AlibabaCloud\Dara\Model;

class operations extends Model
{
    /**
     * @var string
     */
    public $operateTime;

    /**
     * @var string
     */
    public $operateType;
    protected $_name = [
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
        if (isset($map['operateTime'])) {
            $model->operateTime = $map['operateTime'];
        }

        if (isset($map['operateType'])) {
            $model->operateType = $map['operateType'];
        }

        return $model;
    }
}
