<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyUserToDesktopGroupRequest extends Model
{
    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string[]
     */
    public $newEndUserIds;

    /**
     * @var string[]
     */
    public $oldEndUserIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'desktopGroupId' => 'DesktopGroupId',
        'newEndUserIds' => 'NewEndUserIds',
        'oldEndUserIds' => 'OldEndUserIds',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->newEndUserIds)) {
            Model::validateArray($this->newEndUserIds);
        }
        if (\is_array($this->oldEndUserIds)) {
            Model::validateArray($this->oldEndUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }

        if (null !== $this->newEndUserIds) {
            if (\is_array($this->newEndUserIds)) {
                $res['NewEndUserIds'] = [];
                $n1 = 0;
                foreach ($this->newEndUserIds as $item1) {
                    $res['NewEndUserIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->oldEndUserIds) {
            if (\is_array($this->oldEndUserIds)) {
                $res['OldEndUserIds'] = [];
                $n1 = 0;
                foreach ($this->oldEndUserIds as $item1) {
                    $res['OldEndUserIds'][$n1++] = $item1;
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
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }

        if (isset($map['NewEndUserIds'])) {
            if (!empty($map['NewEndUserIds'])) {
                $model->newEndUserIds = [];
                $n1 = 0;
                foreach ($map['NewEndUserIds'] as $item1) {
                    $model->newEndUserIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OldEndUserIds'])) {
            if (!empty($map['OldEndUserIds'])) {
                $model->oldEndUserIds = [];
                $n1 = 0;
                foreach ($map['OldEndUserIds'] as $item1) {
                    $model->oldEndUserIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
