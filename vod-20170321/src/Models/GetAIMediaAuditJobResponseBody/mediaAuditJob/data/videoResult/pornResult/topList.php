<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult\pornResult;

use AlibabaCloud\Dara\Model;

class topList extends Model
{
    /**
     * @var string
     */
    public $label;

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
    public $url;
    protected $_name = [
        'label' => 'Label',
        'score' => 'Score',
        'timestamp' => 'Timestamp',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
