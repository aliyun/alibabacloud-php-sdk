<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopTimerRequest\desktopTimers;
use AlibabaCloud\Tea\Model;

class ModifyDesktopTimerRequest extends Model
{
    /**
     * @description The IDs of the cloud computers.
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description The details of the scheduled task on cloud computers.
     *
     * @var desktopTimers[]
     */
    public $desktopTimers;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to use the `DesktopTimers`** parameter. Set the value to `true`**.
     *
     * @example true
     *
     * @var bool
     */
    public $useDesktopTimers;
    protected $_name = [
        'desktopId'        => 'DesktopId',
        'desktopTimers'    => 'DesktopTimers',
        'regionId'         => 'RegionId',
        'useDesktopTimers' => 'UseDesktopTimers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopTimers) {
            $res['DesktopTimers'] = [];
            if (null !== $this->desktopTimers && \is_array($this->desktopTimers)) {
                $n = 0;
                foreach ($this->desktopTimers as $item) {
                    $res['DesktopTimers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->useDesktopTimers) {
            $res['UseDesktopTimers'] = $this->useDesktopTimers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDesktopTimerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
        }
        if (isset($map['DesktopTimers'])) {
            if (!empty($map['DesktopTimers'])) {
                $model->desktopTimers = [];
                $n                    = 0;
                foreach ($map['DesktopTimers'] as $item) {
                    $model->desktopTimers[$n++] = null !== $item ? desktopTimers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UseDesktopTimers'])) {
            $model->useDesktopTimers = $map['UseDesktopTimers'];
        }

        return $model;
    }
}
