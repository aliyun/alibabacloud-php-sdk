<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\InspectionTask\inspectionAlarmRules;
use AlibabaCloud\Tea\Model;

class InspectionTask extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $executionBeginTime;

    /**
     * @var string
     */
    public $executionEndTime;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $IP;

    /**
     * @var inspectionAlarmRules[]
     */
    public $inspectionAlarmRules;

    /**
     * @var string
     */
    public $inspectionResult;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $space;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'deviceId'             => 'DeviceId',
        'errorCode'            => 'ErrorCode',
        'executionBeginTime'   => 'ExecutionBeginTime',
        'executionEndTime'     => 'ExecutionEndTime',
        'hostname'             => 'Hostname',
        'IP'                   => 'IP',
        'inspectionAlarmRules' => 'InspectionAlarmRules',
        'inspectionResult'     => 'InspectionResult',
        'itemId'               => 'ItemId',
        'itemName'             => 'ItemName',
        'model'                => 'Model',
        'role'                 => 'Role',
        'space'                => 'Space',
        'taskStatus'           => 'TaskStatus',
        'templateId'           => 'TemplateId',
        'vendor'               => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->executionBeginTime) {
            $res['ExecutionBeginTime'] = $this->executionBeginTime;
        }
        if (null !== $this->executionEndTime) {
            $res['ExecutionEndTime'] = $this->executionEndTime;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->inspectionAlarmRules) {
            $res['InspectionAlarmRules'] = [];
            if (null !== $this->inspectionAlarmRules && \is_array($this->inspectionAlarmRules)) {
                $n = 0;
                foreach ($this->inspectionAlarmRules as $item) {
                    $res['InspectionAlarmRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->inspectionResult) {
            $res['InspectionResult'] = $this->inspectionResult;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->space) {
            $res['Space'] = $this->space;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InspectionTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ExecutionBeginTime'])) {
            $model->executionBeginTime = $map['ExecutionBeginTime'];
        }
        if (isset($map['ExecutionEndTime'])) {
            $model->executionEndTime = $map['ExecutionEndTime'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['InspectionAlarmRules'])) {
            if (!empty($map['InspectionAlarmRules'])) {
                $model->inspectionAlarmRules = [];
                $n                           = 0;
                foreach ($map['InspectionAlarmRules'] as $item) {
                    $model->inspectionAlarmRules[$n++] = null !== $item ? inspectionAlarmRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InspectionResult'])) {
            $model->inspectionResult = $map['InspectionResult'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Space'])) {
            $model->space = $map['Space'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
