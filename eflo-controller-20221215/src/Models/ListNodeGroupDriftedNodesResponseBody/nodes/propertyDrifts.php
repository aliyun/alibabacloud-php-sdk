<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNodeGroupDriftedNodesResponseBody\nodes;

use AlibabaCloud\Dara\Model;

class propertyDrifts extends Model
{
    /**
     * @var string
     */
    public $actualValue;

    /**
     * @var string
     */
    public $minRequiredAction;

    /**
     * @var string
     */
    public $propertyPath;

    /**
     * @var string
     */
    public $targetValue;
    protected $_name = [
        'actualValue' => 'ActualValue',
        'minRequiredAction' => 'MinRequiredAction',
        'propertyPath' => 'PropertyPath',
        'targetValue' => 'TargetValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualValue) {
            $res['ActualValue'] = $this->actualValue;
        }

        if (null !== $this->minRequiredAction) {
            $res['MinRequiredAction'] = $this->minRequiredAction;
        }

        if (null !== $this->propertyPath) {
            $res['PropertyPath'] = $this->propertyPath;
        }

        if (null !== $this->targetValue) {
            $res['TargetValue'] = $this->targetValue;
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
        if (isset($map['ActualValue'])) {
            $model->actualValue = $map['ActualValue'];
        }

        if (isset($map['MinRequiredAction'])) {
            $model->minRequiredAction = $map['MinRequiredAction'];
        }

        if (isset($map['PropertyPath'])) {
            $model->propertyPath = $map['PropertyPath'];
        }

        if (isset($map['TargetValue'])) {
            $model->targetValue = $map['TargetValue'];
        }

        return $model;
    }
}
