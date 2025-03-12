<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceTestTaskRequest extends Model
{
    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the task.
     *
     * This parameter is required.
     * @example nametest
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The Task Execution Region
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $taskRegionId;

    /**
     * @description The service test case ids.
     *
     * This parameter is required.
     * @var string[]
     */
    public $testCaseIds;
    protected $_name = [
        'regionId'     => 'RegionId',
        'taskName'     => 'TaskName',
        'taskRegionId' => 'TaskRegionId',
        'testCaseIds'  => 'TestCaseIds',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['TestCaseIds'] = $this->testCaseIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceTestTaskRequest
     */
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
                $model->testCaseIds = $map['TestCaseIds'];
            }
        }

        return $model;
    }
}
