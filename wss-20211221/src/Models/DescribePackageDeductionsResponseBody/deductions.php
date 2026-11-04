<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribePackageDeductionsResponseBody;

use AlibabaCloud\Dara\Model;

class deductions extends Model
{
    /**
     * @var string
     */
    public $agentType;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $deductionRequestId;

    /**
     * @var string
     */
    public $deductionType;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $groupResourceType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceState;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $packageId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $staTime;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var float
     */
    public $usedCoreTime;

    /**
     * @var int
     */
    public $usedTime;

    /**
     * @var string
     */
    public $usedTimeDecimal;

    /**
     * @var int
     */
    public $usedTimeWithScale;
    protected $_name = [
        'agentType' => 'AgentType',
        'cpu' => 'Cpu',
        'deductionRequestId' => 'DeductionRequestId',
        'deductionType' => 'DeductionType',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'desktopType' => 'DesktopType',
        'endTime' => 'EndTime',
        'groupResourceType' => 'GroupResourceType',
        'instanceId' => 'InstanceId',
        'instanceState' => 'InstanceState',
        'instanceType' => 'InstanceType',
        'memory' => 'Memory',
        'model' => 'Model',
        'osType' => 'OsType',
        'packageId' => 'PackageId',
        'regionId' => 'RegionId',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'sessionId' => 'SessionId',
        'staTime' => 'StaTime',
        'summary' => 'Summary',
        'usedCoreTime' => 'UsedCoreTime',
        'usedTime' => 'UsedTime',
        'usedTimeDecimal' => 'UsedTimeDecimal',
        'usedTimeWithScale' => 'UsedTimeWithScale',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->deductionRequestId) {
            $res['DeductionRequestId'] = $this->deductionRequestId;
        }

        if (null !== $this->deductionType) {
            $res['DeductionType'] = $this->deductionType;
        }

        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }

        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->groupResourceType) {
            $res['GroupResourceType'] = $this->groupResourceType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceState) {
            $res['InstanceState'] = $this->instanceState;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->staTime) {
            $res['StaTime'] = $this->staTime;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->usedCoreTime) {
            $res['UsedCoreTime'] = $this->usedCoreTime;
        }

        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        if (null !== $this->usedTimeDecimal) {
            $res['UsedTimeDecimal'] = $this->usedTimeDecimal;
        }

        if (null !== $this->usedTimeWithScale) {
            $res['UsedTimeWithScale'] = $this->usedTimeWithScale;
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
        if (isset($map['AgentType'])) {
            $model->agentType = $map['AgentType'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['DeductionRequestId'])) {
            $model->deductionRequestId = $map['DeductionRequestId'];
        }

        if (isset($map['DeductionType'])) {
            $model->deductionType = $map['DeductionType'];
        }

        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }

        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['GroupResourceType'])) {
            $model->groupResourceType = $map['GroupResourceType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceState'])) {
            $model->instanceState = $map['InstanceState'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['StaTime'])) {
            $model->staTime = $map['StaTime'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['UsedCoreTime'])) {
            $model->usedCoreTime = $map['UsedCoreTime'];
        }

        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        if (isset($map['UsedTimeDecimal'])) {
            $model->usedTimeDecimal = $map['UsedTimeDecimal'];
        }

        if (isset($map['UsedTimeWithScale'])) {
            $model->usedTimeWithScale = $map['UsedTimeWithScale'];
        }

        return $model;
    }
}
