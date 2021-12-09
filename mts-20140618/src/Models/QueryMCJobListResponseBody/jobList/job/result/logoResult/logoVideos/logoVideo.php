<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\logoResult\logoVideos;

use AlibabaCloud\Tea\Model;

class logoVideo extends Model
{
    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'object'     => 'Object',
        'score'      => 'Score',
        'suggestion' => 'Suggestion',
        'time'       => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logoVideo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
