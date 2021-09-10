<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListAlertMessagesRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $remindId;

    /**
     * @var string
     */
    public $alertMethods;

    /**
     * @var string
     */
    public $alertUser;

    /**
     * @var string
     */
    public $alertRuleTypes;
    protected $_name = [
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'beginTime'      => 'BeginTime',
        'endTime'        => 'EndTime',
        'remindId'       => 'RemindId',
        'alertMethods'   => 'AlertMethods',
        'alertUser'      => 'AlertUser',
        'alertRuleTypes' => 'AlertRuleTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->remindId) {
            $res['RemindId'] = $this->remindId;
        }
        if (null !== $this->alertMethods) {
            $res['AlertMethods'] = $this->alertMethods;
        }
        if (null !== $this->alertUser) {
            $res['AlertUser'] = $this->alertUser;
        }
        if (null !== $this->alertRuleTypes) {
            $res['AlertRuleTypes'] = $this->alertRuleTypes;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RemindId'])) {
            $model->remindId = $map['RemindId'];
        }
        if (isset($map['AlertMethods'])) {
            $model->alertMethods = $map['AlertMethods'];
        }
        if (isset($map['AlertUser'])) {
            $model->alertUser = $map['AlertUser'];
        }
        if (isset($map['AlertRuleTypes'])) {
            $model->alertRuleTypes = $map['AlertRuleTypes'];
        }

        return $model;
    }
}
