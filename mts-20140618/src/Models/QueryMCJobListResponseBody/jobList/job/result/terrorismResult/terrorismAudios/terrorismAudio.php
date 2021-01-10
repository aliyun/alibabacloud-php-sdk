<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult\terrorismAudios;

use AlibabaCloud\Tea\Model;

class terrorismAudio extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $object;
    protected $_name = [
        'endTime'    => 'EndTime',
        'startTime'  => 'StartTime',
        'suggestion' => 'Suggestion',
        'score'      => 'Score',
        'text'       => 'Text',
        'object'     => 'Object',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terrorismAudio
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }

        return $model;
    }
}
