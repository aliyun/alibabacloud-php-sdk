<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary;

use AlibabaCloud\Dara\Model;

class autoChapters extends Model
{
    /**
     * @var int
     */
    public $end;
    /**
     * @var string
     */
    public $headline;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $start;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
