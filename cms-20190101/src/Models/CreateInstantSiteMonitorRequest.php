<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateInstantSiteMonitorRequest extends Model
{
    /**
     * @description The URL or IP address that you want to test.
     *
     * @example http://www.aliyun.com
     *
     * @var string
     */
    public $address;

    /**
     * @description The detection points. If you leave this parameter empty, the system randomly selects three detection points.
     *
     * > You must specify one of the `IspCities` and `RandomIspCity` parameters.
     * @example [{"city":"546","isp":"465"},{"city":"572","isp":"465"},{"city":"738","isp":"465"}]
     *
     * @var string
     */
    public $ispCities;

    /**
     * @description The extended options of the protocol that is used by the instant test task. The options vary based on the protocol.
     *
     * @example {"time_out":5000}
     *
     * @var string
     */
    public $optionsJson;

    /**
     * @description The number of detection points.
     *
     * >
     *
     *   You must specify one of the `IspCities` and `RandomIspCity` parameters. If you specify the `RandomIspCity` parameter, the `IspCities` parameter automatically becomes invalid.
     *
     * @example 1
     *
     * @var int
     */
    public $randomIspCity;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the instant test task.
     *
     * The name must be 4 to 100 characters in length, and can contain letters, digits, and underscores (\_).
     * @example task1
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the instant test task. Valid values: HTTP, PING, TCP, UDP, and DNS.
     *
     * @example HTTP
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'address'       => 'Address',
        'ispCities'     => 'IspCities',
        'optionsJson'   => 'OptionsJson',
        'randomIspCity' => 'RandomIspCity',
        'regionId'      => 'RegionId',
        'taskName'      => 'TaskName',
        'taskType'      => 'TaskType',
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

    /**
     * @param array $map
     *
     * @return CreateInstantSiteMonitorRequest
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
