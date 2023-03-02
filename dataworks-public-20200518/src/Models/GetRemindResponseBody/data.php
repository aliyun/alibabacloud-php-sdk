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
     * @description The minimum interval at which alerts are reported. Unit: seconds.
     *
     * @example 1800
     *
     * @var int
     */
    public $alertInterval;

    /**
     * @description The notification method. Valid values:
     *
     *   MAIL: Alert notifications are sent by emails.
     *
     *   SMS: Alert notifications are sent by text messages.
     *
     * Alert notifications can be sent by text messages only in the Singapore (Singapore), Malaysia (Kuala Lumpur), and Germany (Frankfurt) regions.
     *
     *   Multiple notification methods are separated by commas (,).
     *
     * @var string[]
     */
    public $alertMethods;

    /**
     * @description *   If the value of the AlertUnit parameter is OWNER, this parameter is left empty.
     *   If the value of the AlertUnit parameter is OTHER, the ID of the Alibaba Cloud account used by the specified user is returned. Multiple IDs are separated by commas (,).
     *
     * @var string[]
     */
    public $alertTargets;

    /**
     * @description The recipient of the alert. Valid values: OWNER and OTHER. A value of OWNER indicates the node owner. A value of OTHER indicates a specified user.
     *
     * @example OWNER
     *
     * @var string
     */
    public $alertUnit;

    /**
     * @description The baselines to which the custom alert rule is applied. This parameter is returned if the value of the RemindUnit parameter is BASELINE.
     *
     * @var baselines[]
     */
    public $baselines;

    /**
     * @description The workflows to which the custom alert rule is applied. This parameter is returned if the value of the RemindUnit parameter is BIZPROCESS.
     *
     * @var bizProcesses[]
     */
    public $bizProcesses;

    /**
     * @description *   If the value of the RemindType parameter is FINISHED, this parameter is left empty.
     *   If the value of the RemindType parameter is UNFINISHED, the trigger conditions are returned as key-value pairs. Example: {"hour":23,"minu":59}. Valid values of hour: 0 to 47. Valid values of minu: 0 to 59.
     *   If the value of the RemindType parameter is ERROR, this parameter is left empty.
     *   If the value of the RemindType parameter is CYCLE_UNFINISHED, the trigger conditions are returned as key-value pairs. Example: {"1":"05:50","2":"06:50","3":"07:50","4":"08:50","5":"09:50","6":"10:50","7":"11:50","8":"12:50","9":"13:50","10":"14:50","11":"15:50","12":"16:50","13":"17:50","14":"18:50","15":"19:50","16":"20:50","17":"21:50","18":"22:50","19":"23:50","20":"24:50","21":"25:50"}. The key indicates the ID of the cycle. Valid values: 1 to 288. The value indicates the timeout period of the node that is run in the cycle. The value is in the hh:mm format. Valid values of hh: 0 to 47. Valid values of mm: 0 to 59.
     *   If the value of the RemindType parameter is TIMEOUT, the timeout period is returned. Unit: seconds. Example: 1800. This value indicates that an alert is reported if the node is run for more than 30 minutes.
     *
     * @example {"hour":23,"minu":59}
     *
     * @var string
     */
    public $detail;

    /**
     * @description The end time of the quiet hours. The value is in the hh:mm format. Valid values of hh: 0 to 23. Valid values of mm: 0 to 59.
     *
     * @example 08:00
     *
     * @var string
     */
    public $dndEnd;

    /**
     * @description The start time of the quiet hours. The value is in the hh:mm format. Valid values of hh: 0 to 23. Valid values of mm: 0 to 59.
     *
     * @example 00:00
     *
     * @var string
     */
    public $dndStart;

    /**
     * @description The ID of the Alibaba Cloud account used by the creator of the custom alert rule.
     *
     * @example 9527951795****
     *
     * @var string
     */
    public $founder;

    /**
     * @description The maximum number of alerts.
     *
     * @example 3
     *
     * @var int
     */
    public $maxAlertTimes;

    /**
     * @description The nodes to which the custom alert rule is applied. This parameter is returned if the value of the RemindUnit parameter is NODE.
     *
     * @var nodes[]
     */
    public $nodes;

    /**
     * @description The workspaces to which the custom alert rule is applied. This parameter is returned if the value of the RemindUnit parameter is PROJECT.
     *
     * @var projects[]
     */
    public $projects;

    /**
     * @description The ID of the custom alert rule.
     *
     * @example 1234
     *
     * @var int
     */
    public $remindId;

    /**
     * @description The name of the custom alert rule.
     *
     * @var string
     */
    public $remindName;

    /**
     * @description The conditions that trigger an alert. Valid values: FINISHED, UNFINISHED, ERROR, CYCLE_UNFINISHED, and TIMEOUT. A value of FINISHED indicates that the node is run. A value of UNFINISHED indicates that the node is still running at the specified point in time. A value of ERROR indicates that an error occurs when the node is running. A value of CYCLE_UNFINISHED indicates that the node is still running in the specified cycle. A value of TIMEOUT indicates that the node times out.
     *
     * @example FINISHED
     *
     * @var string
     */
    public $remindType;

    /**
     * @description The type of the object to which the custom alert rule is applied. Valid values: NODE, BASELINE, PROJECT, and BIZPROCESS. A value of NODE indicates that the monitored object is a node. A value of BASELINE indicates that the monitored object is a baseline. A value of PROJECT indicates that the monitored object is a workspace. A value of BIZPROCESS indicates that the monitored object is a workflow.
     *
     * @example NODE
     *
     * @var string
     */
    public $remindUnit;

    /**
     * @description The webhook URLs of the DingTalk chatbots.
     *
     * @var robots[]
     */
    public $robots;

    /**
     * @description Indicates whether the custom alert rule is enabled. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $useflag;

    /**
     * @description -
     *
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
