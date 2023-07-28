<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody\mediaAuditResultTimeline;

use AlibabaCloud\Tea\Model;

class terrorism extends Model
{
    /**
     * @description The category of the review result. Valid values:
     *
     *   **terrorism**: terrorist content
     *   **outfit**: special costume
     *   **logo**: special logo
     *   **weapon**: weapon
     *   **politics**: politically sensitive content
     *   **others**: other terrorist and politically sensitive content
     *   **normal**: normal content
     *
     * @example normal
     *
     * @var string
     */
    public $label;

    /**
     * @description The score of the review result category.
     *
     * @example 100.00
     *
     * @var string
     */
    public $score;

    /**
     * @description The position in the video. Unit: milliseconds.
     *
     * @example 3005
     *
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'label'     => 'Label',
        'score'     => 'Score',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terrorism
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
