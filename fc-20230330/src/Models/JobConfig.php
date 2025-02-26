<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class JobConfig extends Model
{
    /**
     * @var int
     */
    public $maxRetryTime;
    /**
     * @var int
     */
    public $triggerInterval;
    protected $_name = [
        'maxRetryTime'    => 'maxRetryTime',
        'triggerInterval' => 'triggerInterval',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
