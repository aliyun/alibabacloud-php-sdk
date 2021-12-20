<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class GetBucketReplicationResponseBody extends Model
{
    /**
     * @var ReplicationRule[]
     */
    public $rules;
    protected $_name = [
        'rules' => 'Rule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rules) {
            $res['Rule'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBucketReplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rule'])) {
            if (!empty($map['Rule'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rule'] as $item) {
                    $model->rules[$n++] = null !== $item ? ReplicationRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
