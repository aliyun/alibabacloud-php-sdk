<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListAlertsRequest extends Model
{
    /**
     * @var string
     */
    public $alertName;

    /**
     * @var int
     */
    public $dispatchRuleId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $integrationType;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var bool
     */
    public $showActivities;

    /**
     * @var bool
     */
    public $showEvents;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $state;
    protected $_name = [
        'alertName'       => 'AlertName',
        'dispatchRuleId'  => 'DispatchRuleId',
        'endTime'         => 'EndTime',
        'integrationType' => 'IntegrationType',
        'page'            => 'Page',
        'severity'        => 'Severity',
        'showActivities'  => 'ShowActivities',
        'showEvents'      => 'ShowEvents',
        'size'            => 'Size',
        'startTime'       => 'StartTime',
        'state'           => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->dispatchRuleId) {
            $res['DispatchRuleId'] = $this->dispatchRuleId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->integrationType) {
            $res['IntegrationType'] = $this->integrationType;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }
        if (null !== $this->showActivities) {
            $res['ShowActivities'] = $this->showActivities;
        }
        if (null !== $this->showEvents) {
            $res['ShowEvents'] = $this->showEvents;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlertsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['DispatchRuleId'])) {
            $model->dispatchRuleId = $map['DispatchRuleId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IntegrationType'])) {
            $model->integrationType = $map['IntegrationType'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }
        if (isset($map['ShowActivities'])) {
            $model->showActivities = $map['ShowActivities'];
        }
        if (isset($map['ShowEvents'])) {
            $model->showEvents = $map['ShowEvents'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
