<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class ReportInstancesStatusRequest extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string[]
     */
    public $device;
    /**
     * @var string[]
     */
    public $diskId;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string[]
     */
    public $instanceId;
    /**
     * @var string
     */
    public $issueCategory;
    /**
     * @var string
     */
    public $ownerAccount;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $reason;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceOwnerAccount;
    /**
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'description'          => 'Description',
        'device'               => 'Device',
        'diskId'               => 'DiskId',
        'endTime'              => 'EndTime',
        'instanceId'           => 'InstanceId',
        'issueCategory'        => 'IssueCategory',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'reason'               => 'Reason',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'startTime'            => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->device)) {
            Model::validateArray($this->device);
        }
        if (\is_array($this->diskId)) {
            Model::validateArray($this->diskId);
        }
        if (\is_array($this->instanceId)) {
            Model::validateArray($this->instanceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->device) {
            if (\is_array($this->device)) {
                $res['Device'] = [];
                $n1            = 0;
                foreach ($this->device as $item1) {
                    $res['Device'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->diskId) {
            if (\is_array($this->diskId)) {
                $res['DiskId'] = [];
                $n1            = 0;
                foreach ($this->diskId as $item1) {
                    $res['DiskId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            if (\is_array($this->instanceId)) {
                $res['InstanceId'] = [];
                $n1                = 0;
                foreach ($this->instanceId as $item1) {
                    $res['InstanceId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->issueCategory) {
            $res['IssueCategory'] = $this->issueCategory;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Device'])) {
            if (!empty($map['Device'])) {
                $model->device = [];
                $n1            = 0;
                foreach ($map['Device'] as $item1) {
                    $model->device[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DiskId'])) {
            if (!empty($map['DiskId'])) {
                $model->diskId = [];
                $n1            = 0;
                foreach ($map['DiskId'] as $item1) {
                    $model->diskId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = [];
                $n1                = 0;
                foreach ($map['InstanceId'] as $item1) {
                    $model->instanceId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['IssueCategory'])) {
            $model->issueCategory = $map['IssueCategory'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
