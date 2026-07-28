<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\ListAutopilotTuningHistoriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\TuningHistory;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var TuningHistory[]
     */
    public $tuningHistories;
    protected $_name = [
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'totalCount' => 'totalCount',
        'tuningHistories' => 'tuningHistories',
    ];

    public function validate()
    {
        if (\is_array($this->tuningHistories)) {
            Model::validateArray($this->tuningHistories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        if (null !== $this->tuningHistories) {
            if (\is_array($this->tuningHistories)) {
                $res['tuningHistories'] = [];
                $n1 = 0;
                foreach ($this->tuningHistories as $item1) {
                    $res['tuningHistories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        if (isset($map['tuningHistories'])) {
            if (!empty($map['tuningHistories'])) {
                $model->tuningHistories = [];
                $n1 = 0;
                foreach ($map['tuningHistories'] as $item1) {
                    $model->tuningHistories[$n1] = TuningHistory::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
