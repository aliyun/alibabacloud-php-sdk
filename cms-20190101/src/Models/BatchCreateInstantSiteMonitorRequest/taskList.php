<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\BatchCreateInstantSiteMonitorRequest;

use AlibabaCloud\Dara\Model;

class taskList extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $ispCities;

    /**
     * @var string
     */
    public $optionsJson;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'address' => 'Address',
        'ispCities' => 'IspCities',
        'optionsJson' => 'OptionsJson',
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
