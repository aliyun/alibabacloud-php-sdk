<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\SDK\Green\V20220926\Models\DescribeOnlineTestResultResponseBody\audioData;
use AlibabaCloud\SDK\Green\V20220926\Models\DescribeOnlineTestResultResponseBody\frameData;
use AlibabaCloud\SDK\Green\V20220926\Models\DescribeOnlineTestResultResponseBody\summaryList;
use AlibabaCloud\Tea\Model;

class DescribeOnlineTestResultResponseBody extends Model
{
    /**
     * @var audioData
     */
    public $audioData;

    /**
     * @var frameData
     */
    public $frameData;

    /**
     * @example 1725761005419
     *
     * @var string
     */
    public $moderationTime;

    /**
     * @example AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @example VideoModeration
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @var summaryList[]
     */
    public $summaryList;

    /**
     * @example xxxxx-xxxxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @example https://xxxxxxxxx.com/data/data.png
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'audioData' => 'AudioData',
        'frameData' => 'FrameData',
        'moderationTime' => 'ModerationTime',
        'requestId' => 'RequestId',
        'riskLevel' => 'RiskLevel',
        'serviceCode' => 'ServiceCode',
        'summaryList' => 'SummaryList',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioData) {
            $res['AudioData'] = null !== $this->audioData ? $this->audioData->toMap() : null;
        }
        if (null !== $this->frameData) {
            $res['FrameData'] = null !== $this->frameData ? $this->frameData->toMap() : null;
        }
        if (null !== $this->moderationTime) {
            $res['ModerationTime'] = $this->moderationTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->summaryList) {
            $res['SummaryList'] = [];
            if (null !== $this->summaryList && \is_array($this->summaryList)) {
                $n = 0;
                foreach ($this->summaryList as $item) {
                    $res['SummaryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOnlineTestResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioData'])) {
            $model->audioData = audioData::fromMap($map['AudioData']);
        }
        if (isset($map['FrameData'])) {
            $model->frameData = frameData::fromMap($map['FrameData']);
        }
        if (isset($map['ModerationTime'])) {
            $model->moderationTime = $map['ModerationTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['SummaryList'])) {
            if (!empty($map['SummaryList'])) {
                $model->summaryList = [];
                $n = 0;
                foreach ($map['SummaryList'] as $item) {
                    $model->summaryList[$n++] = null !== $item ? summaryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
