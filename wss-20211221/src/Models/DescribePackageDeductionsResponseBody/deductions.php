<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribePackageDeductionsResponseBody;

use AlibabaCloud\Dara\Model;

class deductions extends Model
{
    /**
     * @var int
     */
    public $cpu;

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
    public $instanceState;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $staTime;

    /**
     * @var float
     */
    public $usedCoreTime;

    /**
     * @var int
     */
    public $usedTime;
    protected $_name = [
        'cpu' => 'Cpu',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'desktopType' => 'DesktopType',
        'endTime' => 'EndTime',
        'instanceState' => 'InstanceState',
        'memory' => 'Memory',
        'osType' => 'OsType',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'staTime' => 'StaTime',
        'usedCoreTime' => 'UsedCoreTime',
        'usedTime' => 'UsedTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
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

        if (null !== $this->instanceState) {
            $res['InstanceState'] = $this->instanceState;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->staTime) {
            $res['StaTime'] = $this->staTime;
        }

        if (null !== $this->usedCoreTime) {
            $res['UsedCoreTime'] = $this->usedCoreTime;
        }

        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
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

        if (isset($map['InstanceState'])) {
            $model->instanceState = $map['InstanceState'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['StaTime'])) {
            $model->staTime = $map['StaTime'];
        }

        if (isset($map['UsedCoreTime'])) {
            $model->usedCoreTime = $map['UsedCoreTime'];
        }

        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        return $model;
    }
}
