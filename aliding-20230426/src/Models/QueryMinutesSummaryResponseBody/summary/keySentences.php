<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary;

use AlibabaCloud\Tea\Model;

class keySentences extends Model
{
    /**
     * @example 7910000
     *
     * @var int
     */
    public $end;

    /**
     * @example 2
     *
     * @var int
     */
    public $id;

    /**
     * @example 2
     *
     * @var int
     */
    public $sentenceId;

    /**
     * @example 7901100
     *
     * @var int
     */
    public $start;

    /**
     * @example 内容
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'end'        => 'End',
        'id'         => 'Id',
        'sentenceId' => 'SentenceId',
        'start'      => 'Start',
        'text'       => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->sentenceId) {
            $res['SentenceId'] = $this->sentenceId;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keySentences
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SentenceId'])) {
            $model->sentenceId = $map['SentenceId'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
