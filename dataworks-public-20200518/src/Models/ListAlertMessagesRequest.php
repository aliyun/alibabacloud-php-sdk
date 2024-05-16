<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListAlertMessagesRequest extends Model
{
    /**
     * @description The notification method. Valid values:
     *
     *   MAIL: email
     *
     *   SMS: text message
     *
     * You can specify multiple notification methods. Separate them with commas (,).
     * @example SMS,MAIL,PHONE
     *
     * @var string
     */
    public $alertMethods;

    /**
     * @description The type of the alert rule. Valid values: GLOBAL, USER_DEFINE, and OTHER. The value GLOBAL indicates that the alert rule is a global alert rule. The value USER_DEFINE indicates that the alert rule is customized by a user. The value OTHER indicates that the alert rule is a rule of another type. You can specify multiple types. Separate them with commas (,).
     *
     * @example GLOBAL,USER_DEFINE,OTHER
     *
     * @var string
     */
    public $alertRuleTypes;

    /**
     * @description The ID of the Alibaba Cloud account used by the alert recipient.
     *
     * @example 123456
     *
     * @var string
     */
    public $alertUser;

    /**
     * @description The ID of the baseline. This parameter takes effect if the AlertRuleTypes parameter is set to GLOBAL.
     *
     * You can configure either this parameter or RemindId.
     * @example 1234
     *
     * @var int
     */
    public $baselineId;

    /**
     * @description The beginning of the time range to query. Specify the time in the yyyy-MM-dd\\"T\\"HH:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     * @example 2020-04-02T00:00:00+0800
     *
     * @var string
     */
    public $beginTime;

    /**
     * @description The end of the time range to query. Specify the time in the yyyy-MM-dd\\"T\\"HH:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     * @example 2020-04-04T00:00:00+0800
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The number of the page to return. Valid values: 1 to 30. Default value: 1.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the custom alert rule. This parameter takes effect if the AlertRuleTypes parameter is set to USER_DEFINE.
     *
     * You can configure either this parameter or BaselineId.
     * @example 9527
     *
     * @var int
     */
    public $remindId;
    protected $_name = [
        'alertMethods'   => 'AlertMethods',
        'alertRuleTypes' => 'AlertRuleTypes',
        'alertUser'      => 'AlertUser',
        'baselineId'     => 'BaselineId',
        'beginTime'      => 'BeginTime',
        'endTime'        => 'EndTime',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'remindId'       => 'RemindId',
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
        if (null !== $this->alertRuleTypes) {
            $res['AlertRuleTypes'] = $this->alertRuleTypes;
        }
        if (null !== $this->alertUser) {
            $res['AlertUser'] = $this->alertUser;
        }
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remindId) {
            $res['RemindId'] = $this->remindId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlertMessagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertMethods'])) {
            $model->alertMethods = $map['AlertMethods'];
        }
        if (isset($map['AlertRuleTypes'])) {
            $model->alertRuleTypes = $map['AlertRuleTypes'];
        }
        if (isset($map['AlertUser'])) {
            $model->alertUser = $map['AlertUser'];
        }
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RemindId'])) {
            $model->remindId = $map['RemindId'];
        }

        return $model;
    }
}
