<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ListTriggersOutput extends Model
{
    /**
     * @example next_token
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var Trigger[]
     */
    public $triggers;
    protected $_name = [
        'nextToken' => 'nextToken',
        'triggers'  => 'triggers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->triggers) {
            $res['triggers'] = [];
            if (null !== $this->triggers && \is_array($this->triggers)) {
                $n = 0;
                foreach ($this->triggers as $item) {
                    $res['triggers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTriggersOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['triggers'])) {
            if (!empty($map['triggers'])) {
                $model->triggers = [];
                $n               = 0;
                foreach ($map['triggers'] as $item) {
                    $model->triggers[$n++] = null !== $item ? Trigger::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
