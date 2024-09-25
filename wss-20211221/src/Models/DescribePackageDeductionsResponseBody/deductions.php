<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribePackageDeductionsResponseBody;

use AlibabaCloud\Tea\Model;

class deductions extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $cpu;

    /**
     * @example ecd-6wye9optu0kag****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @example DemoComputer
     *
     * @var string
     */
    public $desktopName;

    /**
     * @example eds.enterprise_office.4c8g
     *
     * @var string
     */
    public $desktopType;

    /**
     * @example 2024-07-31T03:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example Deleted
     *
     * @var string
     */
    public $instanceState;

    /**
     * @example 8192
     *
     * @var int
     */
    public $memory;

    /**
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @example 2024-07-31T02:00Z
     *
     * @var string
     */
    public $staTime;

    /**
     * @example 4.0
     *
     * @var float
     */
    public $usedCoreTime;

    /**
     * @example 3600
     *
     * @var int
     */
    public $usedTime;
    protected $_name = [
        'cpu'           => 'Cpu',
        'desktopId'     => 'DesktopId',
        'desktopName'   => 'DesktopName',
        'desktopType'   => 'DesktopType',
        'endTime'       => 'EndTime',
        'instanceState' => 'InstanceState',
        'memory'        => 'Memory',
        'osType'        => 'OsType',
        'regionId'      => 'RegionId',
        'resourceType'  => 'ResourceType',
        'staTime'       => 'StaTime',
        'usedCoreTime'  => 'UsedCoreTime',
        'usedTime'      => 'UsedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return deductions
     */
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
