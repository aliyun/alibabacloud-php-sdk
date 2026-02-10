<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRtcCloudTranscodeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRtcCloudTranscodeResponseBody\taskInfo\inputParam;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRtcCloudTranscodeResponseBody\taskInfo\outputParams;

class taskInfo extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var inputParam
     */
    public $inputParam;

    /**
     * @var int
     */
    public $maxIdleTime;

    /**
     * @var outputParams[]
     */
    public $outputParams;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'inputParam' => 'InputParam',
        'maxIdleTime' => 'MaxIdleTime',
        'outputParams' => 'OutputParams',
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (null !== $this->inputParam) {
            $this->inputParam->validate();
        }
        if (\is_array($this->outputParams)) {
            Model::validateArray($this->outputParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->inputParam) {
            $res['InputParam'] = null !== $this->inputParam ? $this->inputParam->toArray($noStream) : $this->inputParam;
        }

        if (null !== $this->maxIdleTime) {
            $res['MaxIdleTime'] = $this->maxIdleTime;
        }

        if (null !== $this->outputParams) {
            if (\is_array($this->outputParams)) {
                $res['OutputParams'] = [];
                $n1 = 0;
                foreach ($this->outputParams as $item1) {
                    $res['OutputParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['InputParam'])) {
            $model->inputParam = inputParam::fromMap($map['InputParam']);
        }

        if (isset($map['MaxIdleTime'])) {
            $model->maxIdleTime = $map['MaxIdleTime'];
        }

        if (isset($map['OutputParams'])) {
            if (!empty($map['OutputParams'])) {
                $model->outputParams = [];
                $n1 = 0;
                foreach ($map['OutputParams'] as $item1) {
                    $model->outputParams[$n1] = outputParams::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
