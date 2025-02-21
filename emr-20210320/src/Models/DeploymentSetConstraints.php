<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class DeploymentSetConstraints extends Model
{
    /**
     * @var string
     */
    public $defaultValue;
    /**
     * @var string
     */
    public $enableState;
    /**
     * @var ReplacementStrategy
     */
    public $replacementStrategy;
    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'defaultValue'        => 'DefaultValue',
        'enableState'         => 'EnableState',
        'replacementStrategy' => 'ReplacementStrategy',
        'values'              => 'Values',
    ];

    public function validate()
    {
        if (null !== $this->replacementStrategy) {
            $this->replacementStrategy->validate();
        }
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->enableState) {
            $res['EnableState'] = $this->enableState;
        }

        if (null !== $this->replacementStrategy) {
            $res['ReplacementStrategy'] = null !== $this->replacementStrategy ? $this->replacementStrategy->toArray($noStream) : $this->replacementStrategy;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['Values'] = [];
                $n1            = 0;
                foreach ($this->values as $item1) {
                    $res['Values'][$n1++] = $item1;
                }
            }
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
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['EnableState'])) {
            $model->enableState = $map['EnableState'];
        }

        if (isset($map['ReplacementStrategy'])) {
            $model->replacementStrategy = ReplacementStrategy::fromMap($map['ReplacementStrategy']);
        }

        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n1            = 0;
                foreach ($map['Values'] as $item1) {
                    $model->values[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
