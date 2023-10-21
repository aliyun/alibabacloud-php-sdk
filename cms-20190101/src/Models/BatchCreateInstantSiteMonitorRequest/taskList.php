<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\BatchCreateInstantSiteMonitorRequest;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @description The URL or IP address that is monitored by the task.
     *
     * >  You must create at least one site monitoring task. You must specify all of the `Address`, `TaskName`, and `TaskType` parameters in each request.
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $address;

    /**
     * @description The detection points. If you leave this parameter empty, the system randomly selects three detection points.
     *
     * For information about how to obtain detection points, see [DescribeSiteMonitorISPCityList](~~115045~~).
     * @example [{"city":"546","isp":"465"},{"city":"572","isp":"465"},{"city":"738","isp":"465"}]
     *
     * @var string
     */
    public $ispCities;

    /**
     * @description The extended options of the protocol that is used by the site monitoring task. The options vary based on the protocol.
     *
     * @example {"time_out":5000}
     *
     * @var string
     */
    public $optionsJson;

    /**
     * @description The name of the site monitoring task.
     *
     * >  You must create at least one site monitoring task. You must specify all of the `Address`, `TaskName`, and `TaskType` parameters in each request.
     * @example HangZhou_ECS1
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the site monitoring task.
     *
     * >  You must create at least one site monitoring task. You must specify all of the `Address`, `TaskName`, and `TaskType` parameters in each request.
     * @example HTTP
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'address'     => 'Address',
        'ispCities'   => 'IspCities',
        'optionsJson' => 'OptionsJson',
        'taskName'    => 'TaskName',
        'taskType'    => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->ispCities) {
            $res['IspCities'] = $this->ispCities;
        }
        if (null !== $this->optionsJson) {
            $res['OptionsJson'] = $this->optionsJson;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['IspCities'])) {
            $model->ispCities = $map['IspCities'];
        }
        if (isset($map['OptionsJson'])) {
            $model->optionsJson = $map['OptionsJson'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
