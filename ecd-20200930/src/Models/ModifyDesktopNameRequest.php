<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyDesktopNameRequest extends Model
{
    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string[]
     */
    public $desktopIds;

    /**
     * @var string
     */
    public $newDesktopName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $userAssignMode;
    protected $_name = [
        'desktopId' => 'DesktopId',
        'desktopIds' => 'DesktopIds',
        'newDesktopName' => 'NewDesktopName',
        'regionId' => 'RegionId',
        'userAssignMode' => 'UserAssignMode',
    ];

    public function validate()
    {
        if (\is_array($this->desktopIds)) {
            Model::validateArray($this->desktopIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->desktopIds) {
            if (\is_array($this->desktopIds)) {
                $res['DesktopIds'] = [];
                $n1 = 0;
                foreach ($this->desktopIds as $item1) {
                    $res['DesktopIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->newDesktopName) {
            $res['NewDesktopName'] = $this->newDesktopName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->userAssignMode) {
            $res['UserAssignMode'] = $this->userAssignMode;
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
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['DesktopIds'])) {
            if (!empty($map['DesktopIds'])) {
                $model->desktopIds = [];
                $n1 = 0;
                foreach ($map['DesktopIds'] as $item1) {
                    $model->desktopIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NewDesktopName'])) {
            $model->newDesktopName = $map['NewDesktopName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['UserAssignMode'])) {
            $model->userAssignMode = $map['UserAssignMode'];
        }

        return $model;
    }
}
