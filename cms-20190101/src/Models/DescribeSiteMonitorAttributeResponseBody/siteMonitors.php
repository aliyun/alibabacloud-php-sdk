<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\ispCities;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;
use AlibabaCloud\Tea\Model;

class siteMonitors extends Model
{
    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $interval;

    /**
     * @var string
     */
    public $taskState;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var ispCities
     */
    public $ispCities;

    /**
     * @var optionJson
     */
    public $optionJson;
    protected $_name = [
        'taskType'   => 'TaskType',
        'interval'   => 'Interval',
        'taskState'  => 'TaskState',
        'taskName'   => 'TaskName',
        'address'    => 'Address',
        'taskId'     => 'TaskId',
        'ispCities'  => 'IspCities',
        'optionJson' => 'OptionJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->ispCities) {
            $res['IspCities'] = null !== $this->ispCities ? $this->ispCities->toMap() : null;
        }
        if (null !== $this->optionJson) {
            $res['OptionJson'] = null !== $this->optionJson ? $this->optionJson->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return siteMonitors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['IspCities'])) {
            $model->ispCities = ispCities::fromMap($map['IspCities']);
        }
        if (isset($map['OptionJson'])) {
            $model->optionJson = optionJson::fromMap($map['OptionJson']);
        }

        return $model;
    }
}
