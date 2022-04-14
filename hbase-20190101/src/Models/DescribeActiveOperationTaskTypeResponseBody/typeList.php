<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeActiveOperationTaskTypeResponseBody;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return typeList
     */
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
