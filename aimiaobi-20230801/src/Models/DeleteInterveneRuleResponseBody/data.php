<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\DeleteInterveneRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $failIdList;

    /**
     * @example dt-s50ntwtywb4y
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'failIdList' => 'FailIdList',
        'taskId'     => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failIdList) {
            $res['FailIdList'] = $this->failIdList;
        }
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
        if (isset($map['FailIdList'])) {
            if (!empty($map['FailIdList'])) {
                $model->failIdList = $map['FailIdList'];
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
