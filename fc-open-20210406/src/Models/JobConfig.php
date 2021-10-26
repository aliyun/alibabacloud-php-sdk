<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class JobConfig extends Model
{
    /**
     * @description maxRetryTime
     *
     * @var int
     */
    public $maxRetryTime;

    /**
     * @description triggerInterval
     *
     * @var int
     */
    public $triggerInterval;
    protected $_name = [
        'maxRetryTime'    => 'maxRetryTime',
        'triggerInterval' => 'triggerInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxRetryTime) {
            $res['maxRetryTime'] = $this->maxRetryTime;
        }
        if (null !== $this->triggerInterval) {
            $res['triggerInterval'] = $this->triggerInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxRetryTime'])) {
            $model->maxRetryTime = $map['maxRetryTime'];
        }
        if (isset($map['triggerInterval'])) {
            $model->triggerInterval = $map['triggerInterval'];
        }

        return $model;
    }
}
