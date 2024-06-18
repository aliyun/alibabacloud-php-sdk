<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary;

use AlibabaCloud\Tea\Model;

class autoChapters extends Model
{
    /**
     * @example 7910000
     *
     * @var int
     */
    public $end;

    /**
     * @example 章节的一句话标题
     *
     * @var string
     */
    public $headline;

    /**
     * @example 2
     *
     * @var int
     */
    public $id;

    /**
     * @example 7901100
     *
     * @var int
     */
    public $start;

    /**
     * @example 章节总结
     *
     * @var string
     */
    public $summary;
    protected $_name = [
        'end'      => 'End',
        'headline' => 'Headline',
        'id'       => 'Id',
        'start'    => 'Start',
        'summary'  => 'Summary',
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
        if (null !== $this->headline) {
            $res['Headline'] = $this->headline;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoChapters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Headline'])) {
            $model->headline = $map['Headline'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
