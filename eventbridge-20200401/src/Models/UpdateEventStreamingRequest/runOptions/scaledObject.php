<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\runOptions;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\runOptions\scaledObject\triggers;
use AlibabaCloud\Tea\Model;

class scaledObject extends Model
{
    /**
     * @var int
     */
    public $maxReplicaCount;

    /**
     * @var int
     */
    public $minReplicaCount;

    /**
     * @var triggers[]
     */
    public $triggers;
    protected $_name = [
        'maxReplicaCount' => 'MaxReplicaCount',
        'minReplicaCount' => 'MinReplicaCount',
        'triggers'        => 'Triggers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxReplicaCount) {
            $res['MaxReplicaCount'] = $this->maxReplicaCount;
        }
        if (null !== $this->minReplicaCount) {
            $res['MinReplicaCount'] = $this->minReplicaCount;
        }
        if (null !== $this->triggers) {
            $res['Triggers'] = [];
            if (null !== $this->triggers && \is_array($this->triggers)) {
                $n = 0;
                foreach ($this->triggers as $item) {
                    $res['Triggers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scaledObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxReplicaCount'])) {
            $model->maxReplicaCount = $map['MaxReplicaCount'];
        }
        if (isset($map['MinReplicaCount'])) {
            $model->minReplicaCount = $map['MinReplicaCount'];
        }
        if (isset($map['Triggers'])) {
            if (!empty($map['Triggers'])) {
                $model->triggers = [];
                $n               = 0;
                foreach ($map['Triggers'] as $item) {
                    $model->triggers[$n++] = null !== $item ? triggers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
