<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeMeterLiveRtcDurationResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeMeterLiveRtcDurationResponseBody extends Model
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
        'data'                 => 'Data',
        'requestId'            => 'RequestId',
        'totalSummaryDuration' => 'TotalSummaryDuration',
        'v1080SummaryDuration' => 'V1080SummaryDuration',
        'v480SummaryDuration'  => 'V480SummaryDuration',
        'v720SummaryDuration'  => 'V720SummaryDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioSummaryDuration) {
            $res['AudioSummaryDuration'] = $this->audioSummaryDuration;
        }
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

    /**
     * @param array $map
     *
     * @return DescribeMeterLiveRtcDurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioSummaryDuration'])) {
            $model->audioSummaryDuration = $map['AudioSummaryDuration'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
