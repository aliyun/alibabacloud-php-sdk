<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class CreateAICoachTaskSessionRequest extends Model
{
    /**
     * @example 821882330423951360
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 1730530943640489
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'taskId' => 'taskId',
        'uid'    => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAICoachTaskSessionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
