<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\contrabandResult\contrabandOcrs;

use AlibabaCloud\Tea\Model;

class contrabandOcr extends Model
{
    /**
     * @var string
     */
    public $time;

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
        'time'       => 'Time',
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
        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
     * @return contrabandOcr
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
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
