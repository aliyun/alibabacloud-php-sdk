<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyCloudDriveGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $cdsId;

    /**
     * @var string[]
     */
    public $groupId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'cdsId' => 'CdsId',
        'groupId' => 'GroupId',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'totalSize' => 'TotalSize',
    ];

    public function validate()
    {
        if (\is_array($this->groupId)) {
            Model::validateArray($this->groupId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }

        if (null !== $this->groupId) {
            if (\is_array($this->groupId)) {
                $res['GroupId'] = [];
                $n1 = 0;
                foreach ($this->groupId as $item1) {
                    $res['GroupId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }

        if (isset($map['GroupId'])) {
            if (!empty($map['GroupId'])) {
                $model->groupId = [];
                $n1 = 0;
                foreach ($map['GroupId'] as $item1) {
                    $model->groupId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
