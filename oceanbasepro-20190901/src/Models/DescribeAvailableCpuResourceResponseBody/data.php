<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableCpuResourceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $maxCpu;

    /**
     * @var int
     */
    public $minCpu;

    /**
     * @var string
     */
    public $reviewCode;

    /**
     * @var int
     */
    public $unitNum;
    protected $_name = [
        'comment' => 'Comment',
        'maxCpu' => 'MaxCpu',
        'minCpu' => 'MinCpu',
        'reviewCode' => 'ReviewCode',
        'unitNum' => 'UnitNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->maxCpu) {
            $res['MaxCpu'] = $this->maxCpu;
        }

        if (null !== $this->minCpu) {
            $res['MinCpu'] = $this->minCpu;
        }

        if (null !== $this->reviewCode) {
            $res['ReviewCode'] = $this->reviewCode;
        }

        if (null !== $this->unitNum) {
            $res['UnitNum'] = $this->unitNum;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['MaxCpu'])) {
            $model->maxCpu = $map['MaxCpu'];
        }

        if (isset($map['MinCpu'])) {
            $model->minCpu = $map['MinCpu'];
        }

        if (isset($map['ReviewCode'])) {
            $model->reviewCode = $map['ReviewCode'];
        }

        if (isset($map['UnitNum'])) {
            $model->unitNum = $map['UnitNum'];
        }

        return $model;
    }
}
