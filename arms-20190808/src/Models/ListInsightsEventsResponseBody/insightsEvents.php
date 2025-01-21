<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListInsightsEventsResponseBody;

use AlibabaCloud\Dara\Model;

class insightsEvents extends Model
{
    /**
     * @var int
     */
    public $date;
    /**
     * @var string
     */
    public $desc;
    /**
     * @var string
     */
    public $level;
    /**
     * @var string
     */
    public $pid;
    /**
     * @var string
     */
    public $problemId;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'date'      => 'Date',
        'desc'      => 'Desc',
        'level'     => 'Level',
        'pid'       => 'Pid',
        'problemId' => 'ProblemId',
        'title'     => 'Title',
        'type'      => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->problemId) {
            $res['ProblemId'] = $this->problemId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['ProblemId'])) {
            $model->problemId = $map['ProblemId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
