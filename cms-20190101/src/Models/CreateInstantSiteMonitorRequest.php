<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class CreateInstantSiteMonitorRequest extends Model
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
     * @var int
     */
    public $randomIspCity;

    /**
     * @var string
     */
    public $regionId;

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
        'randomIspCity' => 'RandomIspCity',
        'regionId' => 'RegionId',
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

        if (null !== $this->randomIspCity) {
            $res['RandomIspCity'] = $this->randomIspCity;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['RandomIspCity'])) {
            $model->randomIspCity = $map['RandomIspCity'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
