<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetApplicationResponseBody\application\actions\actionParams;

use AlibabaCloud\Dara\Model;

class valueAttribute extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $valueIncrementStep;
    /**
     * @var string
     */
    public $valueMaximum;
    /**
     * @var string
     */
    public $valueMinimum;
    /**
     * @var string
     */
    public $valueType;
    /**
     * @var string
     */
    public $valueUnit;
    protected $_name = [
        'description'        => 'Description',
        'valueIncrementStep' => 'ValueIncrementStep',
        'valueMaximum'       => 'ValueMaximum',
        'valueMinimum'       => 'ValueMinimum',
        'valueType'          => 'ValueType',
        'valueUnit'          => 'ValueUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->valueIncrementStep) {
            $res['ValueIncrementStep'] = $this->valueIncrementStep;
        }

        if (null !== $this->valueMaximum) {
            $res['ValueMaximum'] = $this->valueMaximum;
        }

        if (null !== $this->valueMinimum) {
            $res['ValueMinimum'] = $this->valueMinimum;
        }

        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        if (null !== $this->valueUnit) {
            $res['ValueUnit'] = $this->valueUnit;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ValueIncrementStep'])) {
            $model->valueIncrementStep = $map['ValueIncrementStep'];
        }

        if (isset($map['ValueMaximum'])) {
            $model->valueMaximum = $map['ValueMaximum'];
        }

        if (isset($map['ValueMinimum'])) {
            $model->valueMinimum = $map['ValueMinimum'];
        }

        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        if (isset($map['ValueUnit'])) {
            $model->valueUnit = $map['ValueUnit'];
        }

        return $model;
    }
}
