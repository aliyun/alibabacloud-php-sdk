<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListRemindsResponseBody\data;

use AlibabaCloud\Tea\Model;

class reminds extends Model
{
    /**
     * @description The notification method. Valid values: MAIL, SMS, and PHONE. The value MAIL indicates that the notification is sent by email. The value SMS indicates that the notification is sent by text message. The value PHONE indicates that the notification is sent by call, which is supported only by DataWorks Professional Edition and more advanced editions.
     *
     * @var string[]
     */
    public $alertMethods;

    /**
     * @description The IDs of the Alibaba Cloud accounts that are used to receive alert notifications.
     *
     * @var string[]
     */
    public $alertTargets;

    /**
     * @description The alert recipient. Valid values: OWNER and OTHER. The value OWNER indicates the node owner. The value OTHER indicates a specified user.
     *
     * @example OWNER
     *
     * @var string
     */
    public $alertUnit;

    /**
     * @description The IDs of the baselines to which the custom alert rule is applied. This parameter is returned if the value of the RemindUnit parameter is BASELINE.
     *
     * @var int[]
     */
    public $baselineIds;

    /**
     * @description The IDs of the workflows to which the custom alert rule is applied. This parameter is returned if the value of the RemindUnit parameter is BIZPROCESS.
     *
     * @var int[]
     */
    public $bizProcessIds;

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
     * @description The ID of the Alibaba Cloud account that is used to create the custom alert rule.
     *
     * @example 952795****
     *
     * @var string
     */
    public $founder;

    /**
     * @description The IDs of the nodes to which the custom alert rule is applied. This parameter is returned if the value of the RemindUnit parameter is NODE.
     *
     * @var int[]
     */
    public $nodeIds;

    /**
     * @description The IDs of the workspaces to which the custom alert rule is applied. This parameter is returned if the value of the RemindUnit parameter is PROJECT.
     *
     * @var int[]
     */
    public $projectIds;

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
     * @example Alert Rule
     *
     * @var string
     */
    public $remindName;

    /**
     * @description The conditions that trigger an alert for the node. Valid values: FINISHED, UNFINISHED, ERROR, CYCLE_UNFINISHED, and TIMEOUT. The value FINISHED indicates that the node finishes running. The value UNFINISHED indicates that the node is still running at the specified point in time. The value ERROR indicates that an error occurs when the node is running. The value CYCLE_UNFINISHED indicates that the node does not finish running in the specified scheduling cycle. The value TIMEOUT indicates that the node times out.
     *
     * @example FINISHED
     *
     * @var string
     */
    public $remindType;

    /**
     * @description The type of the object to which the custom alert rule is applied. Valid values: NODE, BASELINE, PROJECT, and BIZPROCESS. The value NODE indicates that the monitored object is a node. The value BASELINE indicates that the monitored object is a baseline. The value PROJECT indicates that the monitored object is a workspace. The value BIZPROCESS indicates that the monitored object is a workflow.
     *
     * @example NODE
     *
     * @var string
     */
    public $remindUnit;

    /**
     * @description Indicates whether the custom alert rule is enabled. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $useflag;
    protected $_name = [
        'alertMethods'  => 'AlertMethods',
        'alertTargets'  => 'AlertTargets',
        'alertUnit'     => 'AlertUnit',
        'baselineIds'   => 'BaselineIds',
        'bizProcessIds' => 'BizProcessIds',
        'dndEnd'        => 'DndEnd',
        'dndStart'      => 'DndStart',
        'founder'       => 'Founder',
        'nodeIds'       => 'NodeIds',
        'projectIds'    => 'ProjectIds',
        'remindId'      => 'RemindId',
        'remindName'    => 'RemindName',
        'remindType'    => 'RemindType',
        'remindUnit'    => 'RemindUnit',
        'useflag'       => 'Useflag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertMethods) {
            $res['AlertMethods'] = $this->alertMethods;
        }
        if (null !== $this->alertTargets) {
            $res['AlertTargets'] = $this->alertTargets;
        }
        if (null !== $this->alertUnit) {
            $res['AlertUnit'] = $this->alertUnit;
        }
        if (null !== $this->baselineIds) {
            $res['BaselineIds'] = $this->baselineIds;
        }
        if (null !== $this->bizProcessIds) {
            $res['BizProcessIds'] = $this->bizProcessIds;
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
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->projectIds) {
            $res['ProjectIds'] = $this->projectIds;
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
        if (null !== $this->useflag) {
            $res['Useflag'] = $this->useflag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reminds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['BaselineIds'])) {
            if (!empty($map['BaselineIds'])) {
                $model->baselineIds = $map['BaselineIds'];
            }
        }
        if (isset($map['BizProcessIds'])) {
            if (!empty($map['BizProcessIds'])) {
                $model->bizProcessIds = $map['BizProcessIds'];
            }
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
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
        }
        if (isset($map['ProjectIds'])) {
            if (!empty($map['ProjectIds'])) {
                $model->projectIds = $map['ProjectIds'];
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
        if (isset($map['Useflag'])) {
            $model->useflag = $map['Useflag'];
        }

        return $model;
    }
}
