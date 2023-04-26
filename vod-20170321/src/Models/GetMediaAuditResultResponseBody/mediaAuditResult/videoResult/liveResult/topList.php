<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult\liveResult;

use AlibabaCloud\Tea\Model;

class topList extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @description Queries the summary of automated review results.
     *
     * @example 100
     *
     * @var string
     */
    public $score;

    /**
     * @example 10
     *
     * @var string
     */
    public $timestamp;

    /**
     * @description The category of the review result. Separate multiple values with commas (,). Valid values:
     *
     * - **porn**
     * - **terrorism**
     * - **normal**
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
