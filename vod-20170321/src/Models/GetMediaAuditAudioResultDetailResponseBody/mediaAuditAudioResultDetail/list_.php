<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditAudioResultDetailResponseBody\mediaAuditAudioResultDetail;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The end time of the audio that failed the review. Unit: seconds.
     *
     * @example 10
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The review results. Valid values:
     *   **spam**
     *   **ad**
     *   **abuse**
     *   **flood**
     *   **contraband**
     *   **meaningless**
     *   **normal**
     *
     * @example abuse
     *
     * @var string
     */
    public $label;

    /**
     * @description The start time of the audio that failed the review. Unit: seconds.
     *
     * @example 8
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The text that corresponds to the audio.
     *
     * @example beauty
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'endTime'   => 'EndTime',
        'label'     => 'Label',
        'startTime' => 'StartTime',
        'text'      => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
