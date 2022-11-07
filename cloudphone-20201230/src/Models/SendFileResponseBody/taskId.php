<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models\SendFileResponseBody;

use AlibabaCloud\Tea\Model;

class taskId extends Model
{
    /**
     * @var string[]
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
     * @return taskId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            if (!empty($map['TaskId'])) {
                $model->taskId = $map['TaskId'];
            }
        }

        return $model;
    }
}
