<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateRemindRequest extends Model
{
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
    public $dndEnd;

    /**
     * @var string
     */
    public $remindUnit;

    /**
     * @var string
     */
    public $nodeIds;

    /**
     * @var string
     */
    public $baselineIds;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $bizProcessIds;

    /**
     * @var string
     */
    public $remindType;

    /**
     * @var int
     */
    public $maxAlertTimes;

    /**
     * @var int
     */
    public $alertInterval;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $alertUnit;

    /**
     * @var string
     */
    public $alertMethods;

    /**
     * @var string
     */
    public $alertTargets;

    /**
     * @var bool
     */
    public $useFlag;

    /**
     * @var string
     */
    public $robotUrls;
    protected $_name = [
        'remindId'      => 'RemindId',
        'remindName'    => 'RemindName',
        'dndEnd'        => 'DndEnd',
        'remindUnit'    => 'RemindUnit',
        'nodeIds'       => 'NodeIds',
        'baselineIds'   => 'BaselineIds',
        'projectId'     => 'ProjectId',
        'bizProcessIds' => 'BizProcessIds',
        'remindType'    => 'RemindType',
        'maxAlertTimes' => 'MaxAlertTimes',
        'alertInterval' => 'AlertInterval',
        'detail'        => 'Detail',
        'alertUnit'     => 'AlertUnit',
        'alertMethods'  => 'AlertMethods',
        'alertTargets'  => 'AlertTargets',
        'useFlag'       => 'UseFlag',
        'robotUrls'     => 'RobotUrls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remindId) {
            $res['RemindId'] = $this->remindId;
        }
        if (null !== $this->remindName) {
            $res['RemindName'] = $this->remindName;
        }
        if (null !== $this->dndEnd) {
            $res['DndEnd'] = $this->dndEnd;
        }
        if (null !== $this->remindUnit) {
            $res['RemindUnit'] = $this->remindUnit;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->baselineIds) {
            $res['BaselineIds'] = $this->baselineIds;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->bizProcessIds) {
            $res['BizProcessIds'] = $this->bizProcessIds;
        }
        if (null !== $this->remindType) {
            $res['RemindType'] = $this->remindType;
        }
        if (null !== $this->maxAlertTimes) {
            $res['MaxAlertTimes'] = $this->maxAlertTimes;
        }
        if (null !== $this->alertInterval) {
            $res['AlertInterval'] = $this->alertInterval;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->alertUnit) {
            $res['AlertUnit'] = $this->alertUnit;
        }
        if (null !== $this->alertMethods) {
            $res['AlertMethods'] = $this->alertMethods;
        }
        if (null !== $this->alertTargets) {
            $res['AlertTargets'] = $this->alertTargets;
        }
        if (null !== $this->useFlag) {
            $res['UseFlag'] = $this->useFlag;
        }
        if (null !== $this->robotUrls) {
            $res['RobotUrls'] = $this->robotUrls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRemindRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemindId'])) {
            $model->remindId = $map['RemindId'];
        }
        if (isset($map['RemindName'])) {
            $model->remindName = $map['RemindName'];
        }
        if (isset($map['DndEnd'])) {
            $model->dndEnd = $map['DndEnd'];
        }
        if (isset($map['RemindUnit'])) {
            $model->remindUnit = $map['RemindUnit'];
        }
        if (isset($map['NodeIds'])) {
            $model->nodeIds = $map['NodeIds'];
        }
        if (isset($map['BaselineIds'])) {
            $model->baselineIds = $map['BaselineIds'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['BizProcessIds'])) {
            $model->bizProcessIds = $map['BizProcessIds'];
        }
        if (isset($map['RemindType'])) {
            $model->remindType = $map['RemindType'];
        }
        if (isset($map['MaxAlertTimes'])) {
            $model->maxAlertTimes = $map['MaxAlertTimes'];
        }
        if (isset($map['AlertInterval'])) {
            $model->alertInterval = $map['AlertInterval'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['AlertUnit'])) {
            $model->alertUnit = $map['AlertUnit'];
        }
        if (isset($map['AlertMethods'])) {
            $model->alertMethods = $map['AlertMethods'];
        }
        if (isset($map['AlertTargets'])) {
            $model->alertTargets = $map['AlertTargets'];
        }
        if (isset($map['UseFlag'])) {
            $model->useFlag = $map['UseFlag'];
        }
        if (isset($map['RobotUrls'])) {
            $model->robotUrls = $map['RobotUrls'];
        }

        return $model;
    }
}
