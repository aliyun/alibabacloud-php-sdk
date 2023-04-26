<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponseBody\mediaAuditResultTimeline;

use AlibabaCloud\Tea\Model;

class logo extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example The category of the review result. Valid values:
     *
     *   **porn**
     *   **sexy**
     *   **normal**
     *
     * @var string
     */
    public $label;

    /**
     * @description The category of the review result. Valid values:
     *
     *   **normal**: normal content
     *   **ad**: ad or text violation
     *
     * @example 100
     *
     * @var string
     */
    public $score;

    /**
     * @description The score of the review result category. Valid values: `[0, 100]`. The value is rounded down to 10 decimal places. The score is representative of the confidence.
     *
     * @example 13
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
     * @return logo
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
