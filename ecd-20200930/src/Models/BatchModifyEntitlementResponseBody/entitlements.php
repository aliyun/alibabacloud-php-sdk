<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\BatchModifyEntitlementResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\BatchModifyEntitlementResponseBody\entitlements\assignModels;

class entitlements extends Model
{
    /**
     * @var assignModels[]
     */
    public $assignModels;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'assignModels' => 'AssignModels',
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->assignModels)) {
            Model::validateArray($this->assignModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignModels) {
            if (\is_array($this->assignModels)) {
                $res['AssignModels'] = [];
                $n1 = 0;
                foreach ($this->assignModels as $item1) {
                    $res['AssignModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AssignModels'])) {
            if (!empty($map['AssignModels'])) {
                $model->assignModels = [];
                $n1 = 0;
                foreach ($map['AssignModels'] as $item1) {
                    $model->assignModels[$n1] = assignModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
