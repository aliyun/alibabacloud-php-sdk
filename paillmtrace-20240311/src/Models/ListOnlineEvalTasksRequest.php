<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Dara\Model;

class ListOnlineEvalTasksRequest extends Model
{
    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $maxTime;

    /**
     * @var string
     */
    public $minTime;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'keyword' => 'Keyword',
        'maxTime' => 'MaxTime',
        'minTime' => 'MinTime',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->maxTime) {
            $res['MaxTime'] = $this->maxTime;
        }

        if (null !== $this->minTime) {
            $res['MinTime'] = $this->minTime;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['MaxTime'])) {
            $model->maxTime = $map['MaxTime'];
        }

        if (isset($map['MinTime'])) {
            $model->minTime = $map['MinTime'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
