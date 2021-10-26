<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class LifecycleHook extends Model
{
    /**
     * @description handler name
     *
     * @var string
     */
    public $handler;

    /**
     * @description timeout in second
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'handler' => 'handler',
        'timeout' => 'timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->handler) {
            $res['handler'] = $this->handler;
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LifecycleHook
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['handler'])) {
            $model->handler = $map['handler'];
        }
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        return $model;
    }
}
