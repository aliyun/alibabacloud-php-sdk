<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\AddTaskRequest;

use AlibabaCloud\Tea\Model;

class callTimeList extends Model
{
    /**
     * @var string[]
     */
    public $callTime;
    protected $_name = [
        'callTime' => 'CallTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callTime) {
            $res['CallTime'] = $this->callTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callTimeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallTime'])) {
            if (!empty($map['CallTime'])) {
                $model->callTime = $map['CallTime'];
            }
        }

        return $model;
    }
}
