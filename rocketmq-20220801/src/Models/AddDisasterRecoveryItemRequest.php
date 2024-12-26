<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\AddDisasterRecoveryItemRequest\topics;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topics) {
            $res['topics'] = [];
            if (null !== $this->topics && \is_array($this->topics)) {
                $n = 0;
                foreach ($this->topics as $item) {
                    $res['topics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDisasterRecoveryItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['topics'])) {
            if (!empty($map['topics'])) {
                $model->topics = [];
                $n             = 0;
                foreach ($map['topics'] as $item) {
                    $model->topics[$n++] = null !== $item ? topics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
