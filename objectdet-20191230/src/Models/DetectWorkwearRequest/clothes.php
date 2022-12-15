<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearRequest;

use AlibabaCloud\Tea\Model;

class clothes extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $maxNum;

    /**
     * @example 0.4
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'maxNum'    => 'MaxNum',
        'threshold' => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxNum) {
            $res['MaxNum'] = $this->maxNum;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clothes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxNum'])) {
            $model->maxNum = $map['MaxNum'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
