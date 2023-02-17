<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class CreateConsumerGroupRequest extends Model
{
    /**
     * @example consumerGroupX
     *
     * @var string
     */
    public $consumerGroup;

    /**
     * @example true
     *
     * @var bool
     */
    public $order;

    /**
     * @example 300
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'consumerGroup' => 'consumerGroup',
        'order'         => 'order',
        'timeout'       => 'timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerGroup) {
            $res['consumerGroup'] = $this->consumerGroup;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConsumerGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['consumerGroup'])) {
            $model->consumerGroup = $map['consumerGroup'];
        }
        if (isset($map['order'])) {
            $model->order = $map['order'];
        }
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        return $model;
    }
}
