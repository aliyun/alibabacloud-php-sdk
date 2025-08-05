<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopTimerRequest\desktopTimers;

class ModifyDesktopTimerRequest extends Model
{
    /**
     * @var string[]
     */
    public $desktopId;

    /**
     * @var desktopTimers[]
     */
    public $desktopTimers;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $useDesktopTimers;
    protected $_name = [
        'desktopId' => 'DesktopId',
        'desktopTimers' => 'DesktopTimers',
        'regionId' => 'RegionId',
        'useDesktopTimers' => 'UseDesktopTimers',
    ];

    public function validate()
    {
        if (\is_array($this->desktopId)) {
            Model::validateArray($this->desktopId);
        }
        if (\is_array($this->desktopTimers)) {
            Model::validateArray($this->desktopTimers);
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
                    $res['DesktopId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desktopTimers) {
            if (\is_array($this->desktopTimers)) {
                $res['DesktopTimers'] = [];
                $n1 = 0;
                foreach ($this->desktopTimers as $item1) {
                    $res['DesktopTimers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
                    $model->desktopId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DesktopTimers'])) {
            if (!empty($map['DesktopTimers'])) {
                $model->desktopTimers = [];
                $n1 = 0;
                foreach ($map['DesktopTimers'] as $item1) {
                    $model->desktopTimers[$n1] = desktopTimers::fromMap($item1);
                    ++$n1;
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
