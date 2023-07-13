<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\BatchCreateIntantSiteMonitorRequest;

use AlibabaCloud\Tea\Model;

class taskList extends Model
{
    /**
     * @example https://www.aliyun.com
     *
     * @var string
     */
    public $address;

    /**
     * @example [{"city":"546","isp":"465"},{"city":"572","isp":"465"},{"city":"738","isp":"465"}]
     *
     * @var string
     */
    public $ispCities;

    /**
     * @example {"time_out":5000}
     *
     * @var string
     */
    public $optionsJson;

    /**
     * @example HangZhou_ECS1
     *
     * @var string
     */
    public $taskName;

    /**
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
