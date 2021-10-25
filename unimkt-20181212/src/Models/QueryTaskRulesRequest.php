<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class QueryTaskRulesRequest extends Model
{
    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskRuleType;
    protected $_name = [
        'taskId'       => 'TaskId',
        'taskRuleType' => 'TaskRuleType',
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
        if (null !== $this->taskRuleType) {
            $res['TaskRuleType'] = $this->taskRuleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTaskRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskRuleType'])) {
            $model->taskRuleType = $map['TaskRuleType'];
        }

        return $model;
    }
}
