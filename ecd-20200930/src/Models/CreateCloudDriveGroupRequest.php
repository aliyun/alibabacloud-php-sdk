<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateCloudDriveGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $adminUserIds;

    /**
     * @var string
     */
    public $cdsId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'adminUserIds' => 'AdminUserIds',
        'cdsId' => 'CdsId',
        'groupId' => 'GroupId',
        'regionId' => 'RegionId',
        'totalSize' => 'TotalSize',
    ];

    public function validate()
    {
        if (\is_array($this->adminUserIds)) {
            Model::validateArray($this->adminUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminUserIds) {
            if (\is_array($this->adminUserIds)) {
                $res['AdminUserIds'] = [];
                $n1 = 0;
                foreach ($this->adminUserIds as $item1) {
                    $res['AdminUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
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
        if (isset($map['AdminUserIds'])) {
            if (!empty($map['AdminUserIds'])) {
                $model->adminUserIds = [];
                $n1 = 0;
                foreach ($map['AdminUserIds'] as $item1) {
                    $model->adminUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
