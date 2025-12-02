<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\DescribeOnlineTestResultResponseBody\audioData;
use AlibabaCloud\SDK\Green\V20220926\Models\DescribeOnlineTestResultResponseBody\frameData;
use AlibabaCloud\SDK\Green\V20220926\Models\DescribeOnlineTestResultResponseBody\summaryList;

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
     * @var string
     */
    public $moderationTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var summaryList[]
     */
    public $summaryList;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;

    /**
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

    public function validate()
    {
        if (null !== $this->audioData) {
            $this->audioData->validate();
        }
        if (null !== $this->frameData) {
            $this->frameData->validate();
        }
        if (\is_array($this->summaryList)) {
            Model::validateArray($this->summaryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioData) {
            $res['AudioData'] = null !== $this->audioData ? $this->audioData->toArray($noStream) : $this->audioData;
        }

        if (null !== $this->frameData) {
            $res['FrameData'] = null !== $this->frameData ? $this->frameData->toArray($noStream) : $this->frameData;
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
            if (\is_array($this->summaryList)) {
                $res['SummaryList'] = [];
                $n1 = 0;
                foreach ($this->summaryList as $item1) {
                    $res['SummaryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['SummaryList'] as $item1) {
                    $model->summaryList[$n1] = summaryList::fromMap($item1);
                    ++$n1;
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
