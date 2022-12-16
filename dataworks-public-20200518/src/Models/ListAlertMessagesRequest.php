<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListAlertMessagesRequest extends Model
{
    /**
     * @example SMS,MAIL,PHONE
     *
     * @var string
     */
    public $alertMethods;

    /**
     * @example GLOBAL,USER_DEFINE,OTHER
     *
     * @var string
     */
    public $alertRuleTypes;

    /**
     * @example 123456
     *
     * @var string
     */
    public $alertUser;

    /**
     * @example 1234
     *
     * @var int
     */
    public $baselineId;

    /**
     * @example 2020-04-02T00:00:00+0800
     *
     * @var string
     */
    public $beginTime;

    /**
     * @example 2020-04-04T00:00:00+0800
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
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
