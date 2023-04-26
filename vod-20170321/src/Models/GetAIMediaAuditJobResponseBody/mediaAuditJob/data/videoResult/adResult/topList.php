<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\adResult;

use AlibabaCloud\Tea\Model;

class topList extends Model
{
    /**
     * @description The URL of the image.
     *
     * @example ad
     *
     * @var string
     */
    public $label;

    /**
     * @description The average score of the review results.
     *
     * @example 100
     *
     * @var string
     */
    public $score;

    /**
     * @description The categories of the review results and the number of images.
     *
     * @example 500
     *
     * @var string
     */
    public $timestamp;

    /**
     * @description The URL of the image.
     *
     * @example The information about the image with the highest score of the category that is indicated by Label.
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
