<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class DeleteAppGroupRequest extends Model
{
    /**
     * @description Specifies whether to delete the jobs in the application group. Valid values:
     *
     * true: deletes the jobs in the application group.
     * false: does not delete the jobs in the application group.
     *
     * @example true
     *
     * @var bool
     */
    public $deleteJobs;

    /**
     * @description The ID of the application. You can obtain the ID of the application on the Application Management page in the SchedulerX console.
     *
     * This parameter is required.
     *
     * @example testSchedulerx.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the namespace. You can obtain the ID of the namespace on the Namespace page in the SchedulerX console.
     *
     * This parameter is required.
     *
     * @example adcfc35d-e2fe-4fe9-bbaa-20e90ffc****
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'deleteJobs' => 'DeleteJobs',
        'groupId' => 'GroupId',
        'namespace' => 'Namespace',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteJobs) {
            $res['DeleteJobs'] = $this->deleteJobs;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAppGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteJobs'])) {
            $model->deleteJobs = $map['DeleteJobs'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
