<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListDeviceOtaTaskByTenantResponseBody\data;

use AlibabaCloud\Tea\Model;

class tenantDeviceOtaTasks extends Model
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $operationStatus;

    /**
     * @var string
     */
    public $publishTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $upgradeCount;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'model'           => 'Model',
        'operationStatus' => 'OperationStatus',
        'publishTime'     => 'PublishTime',
        'status'          => 'Status',
        'taskId'          => 'TaskId',
        'upgradeCount'    => 'UpgradeCount',
        'version'         => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->operationStatus) {
            $res['OperationStatus'] = $this->operationStatus;
        }
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->upgradeCount) {
            $res['UpgradeCount'] = $this->upgradeCount;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantDeviceOtaTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['OperationStatus'])) {
            $model->operationStatus = $map['OperationStatus'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['UpgradeCount'])) {
            $model->upgradeCount = $map['UpgradeCount'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
