<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class CreateServiceTestTaskRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskRegionId;

    /**
     * @var string[]
     */
    public $testCaseIds;
    protected $_name = [
        'regionId' => 'RegionId',
        'taskName' => 'TaskName',
        'taskRegionId' => 'TaskRegionId',
        'testCaseIds' => 'TestCaseIds',
    ];

    public function validate()
    {
        if (\is_array($this->testCaseIds)) {
            Model::validateArray($this->testCaseIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskRegionId) {
            $res['TaskRegionId'] = $this->taskRegionId;
        }

        if (null !== $this->testCaseIds) {
            if (\is_array($this->testCaseIds)) {
                $res['TestCaseIds'] = [];
                $n1 = 0;
                foreach ($this->testCaseIds as $item1) {
                    $res['TestCaseIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskRegionId'])) {
            $model->taskRegionId = $map['TaskRegionId'];
        }

        if (isset($map['TestCaseIds'])) {
            if (!empty($map['TestCaseIds'])) {
                $model->testCaseIds = [];
                $n1 = 0;
                foreach ($map['TestCaseIds'] as $item1) {
                    $model->testCaseIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
