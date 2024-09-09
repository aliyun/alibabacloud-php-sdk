<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\brokerInfo;

use AlibabaCloud\Tea\Model;

class operations extends Model
{
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
        'operateTime' => 'operateTime',
        'operateType' => 'operateType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return operations
     */
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
