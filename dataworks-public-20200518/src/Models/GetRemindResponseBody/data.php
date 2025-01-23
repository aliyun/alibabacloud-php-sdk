<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data\baselines;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data\bizProcesses;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data\nodes;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data\projects;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data\receivers;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetRemindResponseBody\data\robots;

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
     * @var int[]
     */
    public $allowNodes;
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
     * @var receivers[]
     */
    public $receivers;
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
        'allowNodes'    => 'AllowNodes',
        'baselines'     => 'Baselines',
        'bizProcesses'  => 'BizProcesses',
        'detail'        => 'Detail',
        'dndEnd'        => 'DndEnd',
        'dndStart'      => 'DndStart',
        'founder'       => 'Founder',
        'maxAlertTimes' => 'MaxAlertTimes',
        'nodes'         => 'Nodes',
        'projects'      => 'Projects',
        'receivers'     => 'Receivers',
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
        if (\is_array($this->alertMethods)) {
            Model::validateArray($this->alertMethods);
        }
        if (\is_array($this->alertTargets)) {
            Model::validateArray($this->alertTargets);
        }
        if (\is_array($this->allowNodes)) {
            Model::validateArray($this->allowNodes);
        }
        if (\is_array($this->baselines)) {
            Model::validateArray($this->baselines);
        }
        if (\is_array($this->bizProcesses)) {
            Model::validateArray($this->bizProcesses);
        }
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        if (\is_array($this->projects)) {
            Model::validateArray($this->projects);
        }
        if (\is_array($this->receivers)) {
            Model::validateArray($this->receivers);
        }
        if (\is_array($this->robots)) {
            Model::validateArray($this->robots);
        }
        if (\is_array($this->webhooks)) {
            Model::validateArray($this->webhooks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertInterval) {
            $res['AlertInterval'] = $this->alertInterval;
        }

        if (null !== $this->alertMethods) {
            if (\is_array($this->alertMethods)) {
                $res['AlertMethods'] = [];
                $n1                  = 0;
                foreach ($this->alertMethods as $item1) {
                    $res['AlertMethods'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->alertTargets) {
            if (\is_array($this->alertTargets)) {
                $res['AlertTargets'] = [];
                $n1                  = 0;
                foreach ($this->alertTargets as $item1) {
                    $res['AlertTargets'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->alertUnit) {
            $res['AlertUnit'] = $this->alertUnit;
        }

        if (null !== $this->allowNodes) {
            if (\is_array($this->allowNodes)) {
                $res['AllowNodes'] = [];
                $n1                = 0;
                foreach ($this->allowNodes as $item1) {
                    $res['AllowNodes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->baselines) {
            if (\is_array($this->baselines)) {
                $res['Baselines'] = [];
                $n1               = 0;
                foreach ($this->baselines as $item1) {
                    $res['Baselines'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->bizProcesses) {
            if (\is_array($this->bizProcesses)) {
                $res['BizProcesses'] = [];
                $n1                  = 0;
                foreach ($this->bizProcesses as $item1) {
                    $res['BizProcesses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->nodes)) {
                $res['Nodes'] = [];
                $n1           = 0;
                foreach ($this->nodes as $item1) {
                    $res['Nodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->projects) {
            if (\is_array($this->projects)) {
                $res['Projects'] = [];
                $n1              = 0;
                foreach ($this->projects as $item1) {
                    $res['Projects'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->receivers) {
            if (\is_array($this->receivers)) {
                $res['Receivers'] = [];
                $n1               = 0;
                foreach ($this->receivers as $item1) {
                    $res['Receivers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->robots)) {
                $res['Robots'] = [];
                $n1            = 0;
                foreach ($this->robots as $item1) {
                    $res['Robots'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->useflag) {
            $res['Useflag'] = $this->useflag;
        }

        if (null !== $this->webhooks) {
            if (\is_array($this->webhooks)) {
                $res['Webhooks'] = [];
                $n1              = 0;
                foreach ($this->webhooks as $item1) {
                    $res['Webhooks'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AlertInterval'])) {
            $model->alertInterval = $map['AlertInterval'];
        }

        if (isset($map['AlertMethods'])) {
            if (!empty($map['AlertMethods'])) {
                $model->alertMethods = [];
                $n1                  = 0;
                foreach ($map['AlertMethods'] as $item1) {
                    $model->alertMethods[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AlertTargets'])) {
            if (!empty($map['AlertTargets'])) {
                $model->alertTargets = [];
                $n1                  = 0;
                foreach ($map['AlertTargets'] as $item1) {
                    $model->alertTargets[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AlertUnit'])) {
            $model->alertUnit = $map['AlertUnit'];
        }

        if (isset($map['AllowNodes'])) {
            if (!empty($map['AllowNodes'])) {
                $model->allowNodes = [];
                $n1                = 0;
                foreach ($map['AllowNodes'] as $item1) {
                    $model->allowNodes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Baselines'])) {
            if (!empty($map['Baselines'])) {
                $model->baselines = [];
                $n1               = 0;
                foreach ($map['Baselines'] as $item1) {
                    $model->baselines[$n1++] = baselines::fromMap($item1);
                }
            }
        }

        if (isset($map['BizProcesses'])) {
            if (!empty($map['BizProcesses'])) {
                $model->bizProcesses = [];
                $n1                  = 0;
                foreach ($map['BizProcesses'] as $item1) {
                    $model->bizProcesses[$n1++] = bizProcesses::fromMap($item1);
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
                $n1           = 0;
                foreach ($map['Nodes'] as $item1) {
                    $model->nodes[$n1++] = nodes::fromMap($item1);
                }
            }
        }

        if (isset($map['Projects'])) {
            if (!empty($map['Projects'])) {
                $model->projects = [];
                $n1              = 0;
                foreach ($map['Projects'] as $item1) {
                    $model->projects[$n1++] = projects::fromMap($item1);
                }
            }
        }

        if (isset($map['Receivers'])) {
            if (!empty($map['Receivers'])) {
                $model->receivers = [];
                $n1               = 0;
                foreach ($map['Receivers'] as $item1) {
                    $model->receivers[$n1++] = receivers::fromMap($item1);
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
                $n1            = 0;
                foreach ($map['Robots'] as $item1) {
                    $model->robots[$n1++] = robots::fromMap($item1);
                }
            }
        }

        if (isset($map['Useflag'])) {
            $model->useflag = $map['Useflag'];
        }

        if (isset($map['Webhooks'])) {
            if (!empty($map['Webhooks'])) {
                $model->webhooks = [];
                $n1              = 0;
                foreach ($map['Webhooks'] as $item1) {
                    $model->webhooks[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
