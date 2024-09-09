<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\consumerInfos\records;

use AlibabaCloud\Tea\Model;

class operations extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $deadMessage;

    /**
     * @example 100
     *
     * @var int
     */
    public $invisibleTime;

    /**
     * @example 2023-03-22 12:17:08
     *
     * @var string
     */
    public $operateTime;

    /**
     * @example ADD
     *
     * @var string
     */
    public $operateType;
    protected $_name = [
        'deadMessage'   => 'deadMessage',
        'invisibleTime' => 'invisibleTime',
        'operateTime'   => 'operateTime',
        'operateType'   => 'operateType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return operations
     */
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
