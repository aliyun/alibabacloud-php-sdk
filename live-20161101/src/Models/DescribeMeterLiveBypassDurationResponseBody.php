<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeMeterLiveBypassDurationResponseBody\data;

class DescribeMeterLiveBypassDurationResponseBody extends Model
{
    /**
     * @var int
     */
    public $audioSummaryDuration;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $singleAudioSummaryDuration;

    /**
     * @var int
     */
    public $singleVideoSummaryDuration;

    /**
     * @var int
     */
    public $totalSummaryDuration;

    /**
     * @var int
     */
    public $v1080SummaryDuration;

    /**
     * @var int
     */
    public $v480SummaryDuration;

    /**
     * @var int
     */
    public $v720SummaryDuration;
    protected $_name = [
        'audioSummaryDuration' => 'AudioSummaryDuration',
        'data' => 'Data',
        'requestId' => 'RequestId',
        'singleAudioSummaryDuration' => 'SingleAudioSummaryDuration',
        'singleVideoSummaryDuration' => 'SingleVideoSummaryDuration',
        'totalSummaryDuration' => 'TotalSummaryDuration',
        'v1080SummaryDuration' => 'V1080SummaryDuration',
        'v480SummaryDuration' => 'V480SummaryDuration',
        'v720SummaryDuration' => 'V720SummaryDuration',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioSummaryDuration) {
            $res['AudioSummaryDuration'] = $this->audioSummaryDuration;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->singleAudioSummaryDuration) {
            $res['SingleAudioSummaryDuration'] = $this->singleAudioSummaryDuration;
        }

        if (null !== $this->singleVideoSummaryDuration) {
            $res['SingleVideoSummaryDuration'] = $this->singleVideoSummaryDuration;
        }

        if (null !== $this->totalSummaryDuration) {
            $res['TotalSummaryDuration'] = $this->totalSummaryDuration;
        }

        if (null !== $this->v1080SummaryDuration) {
            $res['V1080SummaryDuration'] = $this->v1080SummaryDuration;
        }

        if (null !== $this->v480SummaryDuration) {
            $res['V480SummaryDuration'] = $this->v480SummaryDuration;
        }

        if (null !== $this->v720SummaryDuration) {
            $res['V720SummaryDuration'] = $this->v720SummaryDuration;
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
        if (isset($map['AudioSummaryDuration'])) {
            $model->audioSummaryDuration = $map['AudioSummaryDuration'];
        }

        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1] = data::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SingleAudioSummaryDuration'])) {
            $model->singleAudioSummaryDuration = $map['SingleAudioSummaryDuration'];
        }

        if (isset($map['SingleVideoSummaryDuration'])) {
            $model->singleVideoSummaryDuration = $map['SingleVideoSummaryDuration'];
        }

        if (isset($map['TotalSummaryDuration'])) {
            $model->totalSummaryDuration = $map['TotalSummaryDuration'];
        }

        if (isset($map['V1080SummaryDuration'])) {
            $model->v1080SummaryDuration = $map['V1080SummaryDuration'];
        }

        if (isset($map['V480SummaryDuration'])) {
            $model->v480SummaryDuration = $map['V480SummaryDuration'];
        }

        if (isset($map['V720SummaryDuration'])) {
            $model->v720SummaryDuration = $map['V720SummaryDuration'];
        }

        return $model;
    }
}
