<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201001\Models\DescribeDesktopsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20201001\Models\DescribeDesktopsResponseBody\desktops\disks;

class desktops extends Model
{
    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @var string
     */
    public $dataDiskSize;

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
    public $desktopStatus;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var disks[]
     */
    public $disks;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $lastStartTime;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'connectionStatus' => 'ConnectionStatus',
        'cpu' => 'Cpu',
        'creationTime' => 'CreationTime',
        'dataDiskCategory' => 'DataDiskCategory',
        'dataDiskSize' => 'DataDiskSize',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'desktopStatus' => 'DesktopStatus',
        'desktopType' => 'DesktopType',
        'directoryId' => 'DirectoryId',
        'disks' => 'Disks',
        'endUserIds' => 'EndUserIds',
        'imageId' => 'ImageId',
        'lastStartTime' => 'LastStartTime',
        'memory' => 'Memory',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'officeSiteId' => 'OfficeSiteId',
        'policyGroupId' => 'PolicyGroupId',
        'systemDiskCategory' => 'SystemDiskCategory',
        'systemDiskSize' => 'SystemDiskSize',
    ];

    public function validate()
    {
        if (\is_array($this->disks)) {
            Model::validateArray($this->disks);
        }
        if (\is_array($this->endUserIds)) {
            Model::validateArray($this->endUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }

        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }

        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }

        if (null !== $this->desktopStatus) {
            $res['DesktopStatus'] = $this->desktopStatus;
        }

        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->disks) {
            if (\is_array($this->disks)) {
                $res['Disks'] = [];
                $n1 = 0;
                foreach ($this->disks as $item1) {
                    $res['Disks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->endUserIds) {
            if (\is_array($this->endUserIds)) {
                $res['EndUserIds'] = [];
                $n1 = 0;
                foreach ($this->endUserIds as $item1) {
                    $res['EndUserIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->lastStartTime) {
            $res['LastStartTime'] = $this->lastStartTime;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }

        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }

        if (isset($map['DesktopStatus'])) {
            $model->desktopStatus = $map['DesktopStatus'];
        }

        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['Disks'])) {
            if (!empty($map['Disks'])) {
                $model->disks = [];
                $n1 = 0;
                foreach ($map['Disks'] as $item1) {
                    $model->disks[$n1++] = disks::fromMap($item1);
                }
            }
        }

        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = [];
                $n1 = 0;
                foreach ($map['EndUserIds'] as $item1) {
                    $model->endUserIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['LastStartTime'])) {
            $model->lastStartTime = $map['LastStartTime'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }

        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
