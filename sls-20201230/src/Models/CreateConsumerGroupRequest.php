<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class CreateConsumerGroupRequest extends Model
{
    /**
     * @var string
     */
    public $consumerGroup;

    /**
     * @var bool
     */
    public $order;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'consumerGroup' => 'consumerGroup',
        'order' => 'order',
        'timeout' => 'timeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
