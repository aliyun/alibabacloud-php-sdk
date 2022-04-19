<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeApplicationMonitorResponseBody\ispCityList;
use AlibabaCloud\Tea\Model;

class DescribeApplicationMonitorResponseBody extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var string
     */
    public $address;

    /**
     * @var bool
     */
    public $detectEnable;

    /**
     * @var int
     */
    public $detectThreshold;

    /**
     * @var int
     */
    public $detectTimes;

    /**
     * @var ispCityList[]
     */
    public $ispCityList;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $optionsJson;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $silenceTime;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'acceleratorId'   => 'AcceleratorId',
        'address'         => 'Address',
        'detectEnable'    => 'DetectEnable',
        'detectThreshold' => 'DetectThreshold',
        'detectTimes'     => 'DetectTimes',
        'ispCityList'     => 'IspCityList',
        'listenerId'      => 'ListenerId',
        'optionsJson'     => 'OptionsJson',
        'regionId'        => 'RegionId',
        'requestId'       => 'RequestId',
        'silenceTime'     => 'SilenceTime',
        'taskId'          => 'TaskId',
        'taskName'        => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->detectEnable) {
            $res['DetectEnable'] = $this->detectEnable;
        }
        if (null !== $this->detectThreshold) {
            $res['DetectThreshold'] = $this->detectThreshold;
        }
        if (null !== $this->detectTimes) {
            $res['DetectTimes'] = $this->detectTimes;
        }
        if (null !== $this->ispCityList) {
            $res['IspCityList'] = [];
            if (null !== $this->ispCityList && \is_array($this->ispCityList)) {
                $n = 0;
                foreach ($this->ispCityList as $item) {
                    $res['IspCityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->optionsJson) {
            $res['OptionsJson'] = $this->optionsJson;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicationMonitorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['DetectEnable'])) {
            $model->detectEnable = $map['DetectEnable'];
        }
        if (isset($map['DetectThreshold'])) {
            $model->detectThreshold = $map['DetectThreshold'];
        }
        if (isset($map['DetectTimes'])) {
            $model->detectTimes = $map['DetectTimes'];
        }
        if (isset($map['IspCityList'])) {
            if (!empty($map['IspCityList'])) {
                $model->ispCityList = [];
                $n                  = 0;
                foreach ($map['IspCityList'] as $item) {
                    $model->ispCityList[$n++] = null !== $item ? ispCityList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['OptionsJson'])) {
            $model->optionsJson = $map['OptionsJson'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
