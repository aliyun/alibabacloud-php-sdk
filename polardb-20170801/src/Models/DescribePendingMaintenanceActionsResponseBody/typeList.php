<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePendingMaintenanceActionsResponseBody;

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
    protected $_name = [
        'count'    => 'Count',
        'taskType' => 'TaskType',
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

        return $model;
    }
}
