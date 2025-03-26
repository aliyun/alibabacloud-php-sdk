<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class StopDesktopsRequest extends Model
{
    /**
     * @var string[]
     */
    public $desktopId;

    /**
     * @var bool
     */
    public $osUpdate;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stoppedMode;
    protected $_name = [
        'desktopId' => 'DesktopId',
        'osUpdate' => 'OsUpdate',
        'regionId' => 'RegionId',
        'stoppedMode' => 'StoppedMode',
    ];

    public function validate()
    {
        if (\is_array($this->desktopId)) {
            Model::validateArray($this->desktopId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopId) {
            if (\is_array($this->desktopId)) {
                $res['DesktopId'] = [];
                $n1 = 0;
                foreach ($this->desktopId as $item1) {
                    $res['DesktopId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->osUpdate) {
            $res['OsUpdate'] = $this->osUpdate;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->stoppedMode) {
            $res['StoppedMode'] = $this->stoppedMode;
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
            if (!empty($map['DesktopId'])) {
                $model->desktopId = [];
                $n1 = 0;
                foreach ($map['DesktopId'] as $item1) {
                    $model->desktopId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OsUpdate'])) {
            $model->osUpdate = $map['OsUpdate'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StoppedMode'])) {
            $model->stoppedMode = $map['StoppedMode'];
        }

        return $model;
    }
}
