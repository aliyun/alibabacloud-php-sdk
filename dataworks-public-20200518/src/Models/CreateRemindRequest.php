<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateRemindRequest extends Model
{
    /**
     * @example 1800
     *
     * @var int
     */
    public $alertInterval;

    /**
     * @example SMS,MAIL
     *
     * @var string
     */
    public $alertMethods;

    /**
     * @example 9527952795279527
     *
     * @var string
     */
    public $alertTargets;

    /**
     * @example OWNER
     *
     * @var string
     */
    public $alertUnit;

    /**
     * @example 1,2,3
     *
     * @var string
     */
    public $baselineIds;

    /**
     * @example 1,2,3
     *
     * @var string
     */
    public $bizProcessIds;

    /**
     * @example {"hour":23,"minu":59}
     *
     * @var string
     */
    public $detail;

    /**
     * @example 08:00
     *
     * @var string
     */
    public $dndEnd;

    /**
     * @example 2
     *
     * @var int
     */
    public $maxAlertTimes;

    /**
     * @example 1,2,3
     *
     * @var string
     */
    public $nodeIds;

    /**
     * @example 9527
     *
     * @var int
     */
    public $projectId;

    /**
     * @example test_error_remind
     *
     * @var string
     */
    public $remindName;

    /**
     * @example FINISHED
     *
     * @var string
     */
    public $remindType;

    /**
     * @example NODE
     *
     * @var string
     */
    public $remindUnit;

    /**
     * @example https://oapi.dingtalk.com/robot/send?access_token=******************************
     *
     * @var string
     */
    public $robotUrls;

    /**
     * @var string
     */
    public $webhooks;
    protected $_name = [
        'alertInterval' => 'AlertInterval',
        'alertMethods'  => 'AlertMethods',
        'alertTargets'  => 'AlertTargets',
        'alertUnit'     => 'AlertUnit',
        'baselineIds'   => 'BaselineIds',
        'bizProcessIds' => 'BizProcessIds',
        'detail'        => 'Detail',
        'dndEnd'        => 'DndEnd',
        'maxAlertTimes' => 'MaxAlertTimes',
        'nodeIds'       => 'NodeIds',
        'projectId'     => 'ProjectId',
        'remindName'    => 'RemindName',
        'remindType'    => 'RemindType',
        'remindUnit'    => 'RemindUnit',
        'robotUrls'     => 'RobotUrls',
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
        if (null !== $this->baselineIds) {
            $res['BaselineIds'] = $this->baselineIds;
        }
        if (null !== $this->bizProcessIds) {
            $res['BizProcessIds'] = $this->bizProcessIds;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->dndEnd) {
            $res['DndEnd'] = $this->dndEnd;
        }
        if (null !== $this->maxAlertTimes) {
            $res['MaxAlertTimes'] = $this->maxAlertTimes;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (null !== $this->robotUrls) {
            $res['RobotUrls'] = $this->robotUrls;
        }
        if (null !== $this->webhooks) {
            $res['Webhooks'] = $this->webhooks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRemindRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertInterval'])) {
            $model->alertInterval = $map['AlertInterval'];
        }
        if (isset($map['AlertMethods'])) {
            $model->alertMethods = $map['AlertMethods'];
        }
        if (isset($map['AlertTargets'])) {
            $model->alertTargets = $map['AlertTargets'];
        }
        if (isset($map['AlertUnit'])) {
            $model->alertUnit = $map['AlertUnit'];
        }
        if (isset($map['BaselineIds'])) {
            $model->baselineIds = $map['BaselineIds'];
        }
        if (isset($map['BizProcessIds'])) {
            $model->bizProcessIds = $map['BizProcessIds'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['DndEnd'])) {
            $model->dndEnd = $map['DndEnd'];
        }
        if (isset($map['MaxAlertTimes'])) {
            $model->maxAlertTimes = $map['MaxAlertTimes'];
        }
        if (isset($map['NodeIds'])) {
            $model->nodeIds = $map['NodeIds'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
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
        if (isset($map['RobotUrls'])) {
            $model->robotUrls = $map['RobotUrls'];
        }
        if (isset($map['Webhooks'])) {
            $model->webhooks = $map['Webhooks'];
        }

        return $model;
    }
}
