<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class HealthSummary extends Model
{
    /**
     * @var int
     */
    public $badCount;

    /**
     * @var int
     */
    public $goodCount;

    /**
     * @var int
     */
    public $noneCount;

    /**
     * @var int
     */
    public $stoppedCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $unknownCount;

    /**
     * @var int
     */
    public $warningCount;
    protected $_name = [
        'badCount' => 'BadCount',
        'goodCount' => 'GoodCount',
        'noneCount' => 'NoneCount',
        'stoppedCount' => 'StoppedCount',
        'totalCount' => 'TotalCount',
        'unknownCount' => 'UnknownCount',
        'warningCount' => 'WarningCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->badCount) {
            $res['BadCount'] = $this->badCount;
        }

        if (null !== $this->goodCount) {
            $res['GoodCount'] = $this->goodCount;
        }

        if (null !== $this->noneCount) {
            $res['NoneCount'] = $this->noneCount;
        }

        if (null !== $this->stoppedCount) {
            $res['StoppedCount'] = $this->stoppedCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->unknownCount) {
            $res['UnknownCount'] = $this->unknownCount;
        }

        if (null !== $this->warningCount) {
            $res['WarningCount'] = $this->warningCount;
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
        if (isset($map['BadCount'])) {
            $model->badCount = $map['BadCount'];
        }

        if (isset($map['GoodCount'])) {
            $model->goodCount = $map['GoodCount'];
        }

        if (isset($map['NoneCount'])) {
            $model->noneCount = $map['NoneCount'];
        }

        if (isset($map['StoppedCount'])) {
            $model->stoppedCount = $map['StoppedCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UnknownCount'])) {
            $model->unknownCount = $map['UnknownCount'];
        }

        if (isset($map['WarningCount'])) {
            $model->warningCount = $map['WarningCount'];
        }

        return $model;
    }
}
