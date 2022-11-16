<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data\baselines;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data\bizProcesses;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data\nodes;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data\projects;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data\robots;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $alertInterval;

    /**
     * @var string[]
     */
    public $alertMethods;

    /**
     * @var string[]
     */
    public $alertTargets;

    /**
     * @var string
     */
    public $alertUnit;

    /**
     * @var baselines[]
     */
    public $baselines;

    /**
     * @var bizProcesses[]
     */
    public $bizProcesses;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $dndEnd;

    /**
     * @var string
     */
    public $dndStart;

    /**
     * @var string
     */
    public $founder;

    /**
     * @var int
     */
    public $maxAlertTimes;

    /**
     * @var nodes[]
     */
    public $nodes;

    /**
     * @var projects[]
     */
    public $projects;

    /**
     * @var int
     */
    public $remindId;

    /**
     * @var string
     */
    public $remindName;

    /**
     * @var string
     */
    public $remindType;

    /**
     * @var string
     */
    public $remindUnit;

    /**
     * @var robots[]
     */
    public $robots;

    /**
     * @var bool
     */
    public $useflag;

    /**
     * @var string[]
     */
    public $webhooks;
    protected $_name = [
        'alertInterval' => 'AlertInterval',
        'alertMethods'  => 'AlertMethods',
        'alertTargets'  => 'AlertTargets',
        'alertUnit'     => 'AlertUnit',
        'baselines'     => 'Baselines',
        'bizProcesses'  => 'BizProcesses',
        'detail'        => 'Detail',
        'dndEnd'        => 'DndEnd',
        'dndStart'      => 'DndStart',
        'founder'       => 'Founder',
        'maxAlertTimes' => 'MaxAlertTimes',
        'nodes'         => 'Nodes',
        'projects'      => 'Projects',
        'remindId'      => 'RemindId',
        'remindName'    => 'RemindName',
        'remindType'    => 'RemindType',
        'remindUnit'    => 'RemindUnit',
        'robots'        => 'Robots',
        'useflag'       => 'Useflag',
        'webhooks'      => 'Webhooks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertInterval) {
            $res['AlertInterval'] = $this->alertInterval;
        }
        if (null !== $this->alertMethods) {
            $res['AlertMethods'] = $this->alertMethods;
        }
        if (null !== $this->alertTargets) {
            $res['AlertTargets'] = $this->alertTargets;
        }
        if (null !== $this->alertUnit) {
            $res['AlertUnit'] = $this->alertUnit;
        }
        if (null !== $this->baselines) {
            $res['Baselines'] = [];
            if (null !== $this->baselines && \is_array($this->baselines)) {
                $n = 0;
                foreach ($this->baselines as $item) {
                    $res['Baselines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizProcesses) {
            $res['BizProcesses'] = [];
            if (null !== $this->bizProcesses && \is_array($this->bizProcesses)) {
                $n = 0;
                foreach ($this->bizProcesses as $item) {
                    $res['BizProcesses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->dndEnd) {
            $res['DndEnd'] = $this->dndEnd;
        }
        if (null !== $this->dndStart) {
            $res['DndStart'] = $this->dndStart;
        }
        if (null !== $this->founder) {
            $res['Founder'] = $this->founder;
        }
        if (null !== $this->maxAlertTimes) {
            $res['MaxAlertTimes'] = $this->maxAlertTimes;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projects) {
            $res['Projects'] = [];
            if (null !== $this->projects && \is_array($this->projects)) {
                $n = 0;
                foreach ($this->projects as $item) {
                    $res['Projects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->remindId) {
            $res['RemindId'] = $this->remindId;
        }
        if (null !== $this->remindName) {
            $res['RemindName'] = $this->remindName;
        }
        if (null !== $this->remindType) {
            $res['RemindType'] = $this->remindType;
        }
        if (null !== $this->remindUnit) {
            $res['RemindUnit'] = $this->remindUnit;
        }
        if (null !== $this->robots) {
            $res['Robots'] = [];
            if (null !== $this->robots && \is_array($this->robots)) {
                $n = 0;
                foreach ($this->robots as $item) {
                    $res['Robots'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->useflag) {
            $res['Useflag'] = $this->useflag;
        }
        if (null !== $this->webhooks) {
            $res['Webhooks'] = $this->webhooks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertInterval'])) {
            $model->alertInterval = $map['AlertInterval'];
        }
        if (isset($map['AlertMethods'])) {
            if (!empty($map['AlertMethods'])) {
                $model->alertMethods = $map['AlertMethods'];
            }
        }
        if (isset($map['AlertTargets'])) {
            if (!empty($map['AlertTargets'])) {
                $model->alertTargets = $map['AlertTargets'];
            }
        }
        if (isset($map['AlertUnit'])) {
            $model->alertUnit = $map['AlertUnit'];
        }
        if (isset($map['Baselines'])) {
            if (!empty($map['Baselines'])) {
                $model->baselines = [];
                $n                = 0;
                foreach ($map['Baselines'] as $item) {
                    $model->baselines[$n++] = null !== $item ? baselines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BizProcesses'])) {
            if (!empty($map['BizProcesses'])) {
                $model->bizProcesses = [];
                $n                   = 0;
                foreach ($map['BizProcesses'] as $item) {
                    $model->bizProcesses[$n++] = null !== $item ? bizProcesses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['DndEnd'])) {
            $model->dndEnd = $map['DndEnd'];
        }
        if (isset($map['DndStart'])) {
            $model->dndStart = $map['DndStart'];
        }
        if (isset($map['Founder'])) {
            $model->founder = $map['Founder'];
        }
        if (isset($map['MaxAlertTimes'])) {
            $model->maxAlertTimes = $map['MaxAlertTimes'];
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Projects'])) {
            if (!empty($map['Projects'])) {
                $model->projects = [];
                $n               = 0;
                foreach ($map['Projects'] as $item) {
                    $model->projects[$n++] = null !== $item ? projects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RemindId'])) {
            $model->remindId = $map['RemindId'];
        }
        if (isset($map['RemindName'])) {
            $model->remindName = $map['RemindName'];
        }
        if (isset($map['RemindType'])) {
            $model->remindType = $map['RemindType'];
        }
        if (isset($map['RemindUnit'])) {
            $model->remindUnit = $map['RemindUnit'];
        }
        if (isset($map['Robots'])) {
            if (!empty($map['Robots'])) {
                $model->robots = [];
                $n             = 0;
                foreach ($map['Robots'] as $item) {
                    $model->robots[$n++] = null !== $item ? robots::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Useflag'])) {
            $model->useflag = $map['Useflag'];
        }
        if (isset($map['Webhooks'])) {
            if (!empty($map['Webhooks'])) {
                $model->webhooks = $map['Webhooks'];
            }
        }

        return $model;
    }
}
