<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskTypeResponseBody;

use AlibabaCloud\Dara\Model;

class typeList extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var string
     */
    public $taskType;
    /**
     * @var string
     */
    public $taskTypeInfoEn;
    /**
     * @var string
     */
    public $taskTypeInfoZh;
    protected $_name = [
        'count'          => 'Count',
        'taskType'       => 'TaskType',
        'taskTypeInfoEn' => 'TaskTypeInfoEn',
        'taskTypeInfoZh' => 'TaskTypeInfoZh',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->taskTypeInfoEn) {
            $res['TaskTypeInfoEn'] = $this->taskTypeInfoEn;
        }

        if (null !== $this->taskTypeInfoZh) {
            $res['TaskTypeInfoZh'] = $this->taskTypeInfoZh;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['TaskTypeInfoEn'])) {
            $model->taskTypeInfoEn = $map['TaskTypeInfoEn'];
        }

        if (isset($map['TaskTypeInfoZh'])) {
            $model->taskTypeInfoZh = $map['TaskTypeInfoZh'];
        }

        return $model;
    }
}
