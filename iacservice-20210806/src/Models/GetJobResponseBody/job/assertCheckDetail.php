<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetJobResponseBody\job;

use AlibabaCloud\Dara\Model;

class assertCheckDetail extends Model
{
    /**
     * @var string
     */
    public $comparison;

    /**
     * @var string
     */
    public $expectedValue;

    /**
     * @var bool
     */
    public $isPass;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'comparison' => 'comparison',
        'expectedValue' => 'expectedValue',
        'isPass' => 'isPass',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comparison) {
            $res['comparison'] = $this->comparison;
        }

        if (null !== $this->expectedValue) {
            $res['expectedValue'] = $this->expectedValue;
        }

        if (null !== $this->isPass) {
            $res['isPass'] = $this->isPass;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['comparison'])) {
            $model->comparison = $map['comparison'];
        }

        if (isset($map['expectedValue'])) {
            $model->expectedValue = $map['expectedValue'];
        }

        if (isset($map['isPass'])) {
            $model->isPass = $map['isPass'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
