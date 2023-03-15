<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\MassPushRequest\pushTask;
use AlibabaCloud\Tea\Model;

class MassPushRequest extends Model
{
    /**
     * @example 23267207
     *
     * @var int
     */
    public $appKey;

    /**
     * @var pushTask[]
     */
    public $pushTask;
    protected $_name = [
        'appKey'   => 'AppKey',
        'pushTask' => 'PushTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->pushTask) {
            $res['PushTask'] = [];
            if (null !== $this->pushTask && \is_array($this->pushTask)) {
                $n = 0;
                foreach ($this->pushTask as $item) {
                    $res['PushTask'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MassPushRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['PushTask'])) {
            if (!empty($map['PushTask'])) {
                $model->pushTask = [];
                $n               = 0;
                foreach ($map['PushTask'] as $item) {
                    $model->pushTask[$n++] = null !== $item ? pushTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
