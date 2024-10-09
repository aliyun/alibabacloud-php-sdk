<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\CheckRulesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example t-0000e4w0u1v592zdf6s7
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
