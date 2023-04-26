<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\liveResult;

use AlibabaCloud\Tea\Model;

class topList extends Model
{
    /**
     * @description Queries the information about an intelligent review job. After the job is submitted, it is processed asynchronously. You can call this operation to query the job information in real time.
     *
     * @example GetAIMediaAuditJob
     *
     * @var string
     */
    public $label;

    /**
     * @description The ID of the request.
     *
     * @example 100
     *
     * @var string
     */
    public $score;

    /**
     * @description The results of text review.
     *
     * @example 500
     *
     * @var string
     */
    public $timestamp;

    /**
     * @description The category of the review result. Valid values:
     *
     *   **live**: The content contains undesirable scenes.
     *   **normal**
     *
     * @example The category of the review result. Valid values:
     *
     *   **ad**
     *   **normal**
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'label'     => 'Label',
        'score'     => 'Score',
        'timestamp' => 'Timestamp',
        'url'       => 'Url',
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
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topList
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
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
