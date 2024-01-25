<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeMeterRtcDurationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $audioDuration;

    /**
     * @var int
     */
    public $contentDuration;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var int
     */
    public $totalDuration;

    /**
     * @var int
     */
    public $v1080Duration;

    /**
     * @var int
     */
    public $v480Duration;

    /**
     * @var int
     */
    public $v720Duration;
    protected $_name = [
        'audioDuration'   => 'AudioDuration',
        'contentDuration' => 'ContentDuration',
        'timestamp'       => 'Timestamp',
        'totalDuration'   => 'TotalDuration',
        'v1080Duration'   => 'V1080Duration',
        'v480Duration'    => 'V480Duration',
        'v720Duration'    => 'V720Duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioDuration) {
            $res['AudioDuration'] = $this->audioDuration;
        }
        if (null !== $this->contentDuration) {
            $res['ContentDuration'] = $this->contentDuration;
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioDuration'])) {
            $model->audioDuration = $map['AudioDuration'];
        }
        if (isset($map['ContentDuration'])) {
            $model->contentDuration = $map['ContentDuration'];
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
