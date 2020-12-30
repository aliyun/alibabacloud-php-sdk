<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult\pornResult;

use AlibabaCloud\Tea\Model;

class topList extends Model
{
    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $label;
    protected $_name = [
        'url'       => 'Url',
        'score'     => 'Score',
        'timestamp' => 'Timestamp',
        'label'     => 'Label',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
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
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}
