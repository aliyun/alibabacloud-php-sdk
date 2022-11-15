<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateLocationDateClusteringTaskRequest;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return dateOptions
     */
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
