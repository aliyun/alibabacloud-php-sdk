<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240118\Models;

use AlibabaCloud\Tea\Model;

class ActualDeductResourceCmd extends Model
{
    /**
     * @example 60
     *
     * @var int
     */
    public $cost;

    /**
     * @example 12249732894
     *
     * @var string
     */
    public $extraInfo;

    /**
     * @example 28274623764834
     *
     * @var string
     */
    public $idempotentId;

    /**
     * @example 12249732894
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'cost'         => 'cost',
        'extraInfo'    => 'extraInfo',
        'idempotentId' => 'idempotentId',
        'taskId'       => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cost) {
            $res['cost'] = $this->cost;
        }
        if (null !== $this->extraInfo) {
            $res['extraInfo'] = $this->extraInfo;
        }
        if (null !== $this->idempotentId) {
            $res['idempotentId'] = $this->idempotentId;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ActualDeductResourceCmd
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cost'])) {
            $model->cost = $map['cost'];
        }
        if (isset($map['extraInfo'])) {
            $model->extraInfo = $map['extraInfo'];
        }
        if (isset($map['idempotentId'])) {
            $model->idempotentId = $map['idempotentId'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
