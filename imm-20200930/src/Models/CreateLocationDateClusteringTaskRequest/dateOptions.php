<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateLocationDateClusteringTaskRequest;

use AlibabaCloud\Dara\Model;

class dateOptions extends Model
{
    /**
     * @var int
     */
    public $gapDays;

    /**
     * @var int
     */
    public $maxDays;

    /**
     * @var int
     */
    public $minDays;
    protected $_name = [
        'gapDays' => 'GapDays',
        'maxDays' => 'MaxDays',
        'minDays' => 'MinDays',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gapDays) {
            $res['GapDays'] = $this->gapDays;
        }

        if (null !== $this->maxDays) {
            $res['MaxDays'] = $this->maxDays;
        }

        if (null !== $this->minDays) {
            $res['MinDays'] = $this->minDays;
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
        if (isset($map['GapDays'])) {
            $model->gapDays = $map['GapDays'];
        }

        if (isset($map['MaxDays'])) {
            $model->maxDays = $map['MaxDays'];
        }

        if (isset($map['MinDays'])) {
            $model->minDays = $map['MinDays'];
        }

        return $model;
    }
}
