<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRtcRecordUsageDataResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $audioDuration;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var float
     */
    public $totalDuration;

    /**
     * @var float
     */
    public $v1080Duration;

    /**
     * @var float
     */
    public $v480Duration;

    /**
     * @var float
     */
    public $v720Duration;
    protected $_name = [
        'audioDuration' => 'AudioDuration',
        'timestamp' => 'Timestamp',
        'totalDuration' => 'TotalDuration',
        'v1080Duration' => 'V1080Duration',
        'v480Duration' => 'V480Duration',
        'v720Duration' => 'V720Duration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioDuration) {
            $res['AudioDuration'] = $this->audioDuration;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->totalDuration) {
            $res['TotalDuration'] = $this->totalDuration;
        }

        if (null !== $this->v1080Duration) {
            $res['V1080Duration'] = $this->v1080Duration;
        }

        if (null !== $this->v480Duration) {
            $res['V480Duration'] = $this->v480Duration;
        }

        if (null !== $this->v720Duration) {
            $res['V720Duration'] = $this->v720Duration;
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
        if (isset($map['AudioDuration'])) {
            $model->audioDuration = $map['AudioDuration'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['TotalDuration'])) {
            $model->totalDuration = $map['TotalDuration'];
        }

        if (isset($map['V1080Duration'])) {
            $model->v1080Duration = $map['V1080Duration'];
        }

        if (isset($map['V480Duration'])) {
            $model->v480Duration = $map['V480Duration'];
        }

        if (isset($map['V720Duration'])) {
            $model->v720Duration = $map['V720Duration'];
        }

        return $model;
    }
}
