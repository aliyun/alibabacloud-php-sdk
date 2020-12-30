<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListInstanceTaskResponseBody\result;

use AlibabaCloud\Tea\Model;

class subProgressInfos extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var int
     */
    public $finishedNum;

    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var string
     */
    public $detail;
    protected $_name = [
        'type'        => 'Type',
        'progress'    => 'Progress',
        'finishedNum' => 'FinishedNum',
        'totalNum'    => 'TotalNum',
        'detail'      => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->finishedNum) {
            $res['FinishedNum'] = $this->finishedNum;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subProgressInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['FinishedNum'])) {
            $model->finishedNum = $map['FinishedNum'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        return $model;
    }
}
