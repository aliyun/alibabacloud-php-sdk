<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ListAlertMessagesRequest extends Model
{
    /**
     * @var string
     */
    public $alertMethods;
    /**
     * @var string
     */
    public $alertRuleTypes;
    /**
     * @var string
     */
    public $alertUser;
    /**
     * @var int
     */
    public $baselineId;
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
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
