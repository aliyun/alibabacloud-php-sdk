<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DeleteCloudDriveGroupsRequest extends Model
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
    protected $_name = [
        'cdsId'    => 'CdsId',
        'groupId'  => 'GroupId',
        'regionId' => 'RegionId',
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
                $n1             = 0;
                foreach ($this->groupId as $item1) {
                    $res['GroupId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
                $n1             = 0;
                foreach ($map['GroupId'] as $item1) {
                    $model->groupId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
