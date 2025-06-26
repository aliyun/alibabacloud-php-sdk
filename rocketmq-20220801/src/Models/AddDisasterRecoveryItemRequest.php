<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\AddDisasterRecoveryItemRequest\topics;

class AddDisasterRecoveryItemRequest extends Model
{
    /**
     * @var topics[]
     */
    public $topics;
    protected $_name = [
        'topics' => 'topics',
    ];

    public function validate()
    {
        if (\is_array($this->topics)) {
            Model::validateArray($this->topics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->topics) {
            if (\is_array($this->topics)) {
                $res['topics'] = [];
                $n1 = 0;
                foreach ($this->topics as $item1) {
                    $res['topics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['topics'])) {
            if (!empty($map['topics'])) {
                $model->topics = [];
                $n1 = 0;
                foreach ($map['topics'] as $item1) {
                    $model->topics[$n1] = topics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
