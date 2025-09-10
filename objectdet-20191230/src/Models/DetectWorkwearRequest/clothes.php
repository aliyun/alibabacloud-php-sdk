<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearRequest;

use AlibabaCloud\Dara\Model;

class clothes extends Model
{
    /**
     * @var int
     */
    public $maxNum;

    /**
     * @var float
     */
    public $threshold;
    protected $_name = [
        'maxNum' => 'MaxNum',
        'threshold' => 'Threshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
