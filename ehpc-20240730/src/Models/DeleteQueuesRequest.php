<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class DeleteQueuesRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string[]
     */
    public $queueNames;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'queueNames' => 'QueueNames',
    ];

    public function validate()
    {
        if (\is_array($this->queueNames)) {
            Model::validateArray($this->queueNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->queueNames) {
            if (\is_array($this->queueNames)) {
                $res['QueueNames'] = [];
                $n1                = 0;
                foreach ($this->queueNames as $item1) {
                    $res['QueueNames'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['QueueNames'])) {
            if (!empty($map['QueueNames'])) {
                $model->queueNames = [];
                $n1                = 0;
                foreach ($map['QueueNames'] as $item1) {
                    $model->queueNames[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
