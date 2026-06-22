<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ChapterSummary extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var Summary[]
     */
    public $summary;

    /**
     * @var int[]
     */
    public $timeRange;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $titleID;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'summary' => 'Summary',
        'timeRange' => 'TimeRange',
        'title' => 'Title',
        'titleID' => 'TitleID',
    ];

    public function validate()
    {
        if (\is_array($this->summary)) {
            Model::validateArray($this->summary);
        }
        if (\is_array($this->timeRange)) {
            Model::validateArray($this->timeRange);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->summary) {
            if (\is_array($this->summary)) {
                $res['Summary'] = [];
                $n1 = 0;
                foreach ($this->summary as $item1) {
                    $res['Summary'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeRange) {
            if (\is_array($this->timeRange)) {
                $res['TimeRange'] = [];
                $n1 = 0;
                foreach ($this->timeRange as $item1) {
                    $res['TimeRange'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->titleID) {
            $res['TitleID'] = $this->titleID;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['Summary'])) {
            if (!empty($map['Summary'])) {
                $model->summary = [];
                $n1 = 0;
                foreach ($map['Summary'] as $item1) {
                    $model->summary[$n1] = Summary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TimeRange'])) {
            if (!empty($map['TimeRange'])) {
                $model->timeRange = [];
                $n1 = 0;
                foreach ($map['TimeRange'] as $item1) {
                    $model->timeRange[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['TitleID'])) {
            $model->titleID = $map['TitleID'];
        }

        return $model;
    }
}
