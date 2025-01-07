<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\SubmitOperationTaskRequest;

use AlibabaCloud\Tea\Model;

class operationTaskInstances extends Model
{
    /**
     * @description The instance ID of the server.
     *
     * @example i-uf6533m4vuo3oa33****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the server.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the task that you want to roll back
     *
     * @example 7d0b10e35e80c9e5ebac5f1054****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The service provider of the asset. Valid values:
     *
     *   **0**: an asset provided by Alibaba Cloud.
     *   **1**: an asset outside Alibaba Cloud.
     *   **2**: an asset in a data center.
     *   **3**, **4**, **5**, and **7**: an asset from a third-party cloud service provider.
     *   **8**: a lightweight asset.
     *
     * @example 7
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
        'taskId'     => 'TaskId',
        'vendor'     => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationTaskInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
