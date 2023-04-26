<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult\logoResult;

use AlibabaCloud\Tea\Model;

class topList extends Model
{
    /**
     * @description The score of the image of the category that is indicated by Label.
     *
     * @example The category of the review result. Valid values:
     *
     * - **normal**
     * - **bloody**
     * - **explosion**
     * - **outfit**
     * - **logo**
     * - **weapon**
     * - **politics**
     * - **violence**
     * - **crowd**
     * - **parade**
     * - **carcrash**
     * - **flag**
     * - **location**
     * - **others**
     * @var string
     */
    public $label;

    /**
     * @description The recommendation for review results. Valid values:
     *
     *   **block**
     *   **review**
     *   **pass**
     *
     * @example 100
     *
     * @var string
     */
    public $score;

    /**
     * @description The category of the review result. Valid values:
     *
     * - **live**: The content contains undesirable scenes.
     * - **normal**: normal content.
     * @example 16
     *
     * @var string
     */
    public $timestamp;

    /**
     * @description The number of frames.
     *
     * @example http://temp-testbucket.oss-cn-shanghai.aliyuncs.com/aivideocensor/****.jpg
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
