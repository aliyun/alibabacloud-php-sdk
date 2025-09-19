<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListScalingConfigsOutput extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var ScalingConfigStatus[]
     */
    public $scalingConfigs;
    protected $_name = [
        'nextToken' => 'nextToken',
        'scalingConfigs' => 'scalingConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->scalingConfigs)) {
            Model::validateArray($this->scalingConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->scalingConfigs) {
            if (\is_array($this->scalingConfigs)) {
                $res['scalingConfigs'] = [];
                $n1 = 0;
                foreach ($this->scalingConfigs as $item1) {
                    $res['scalingConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['scalingConfigs'])) {
            if (!empty($map['scalingConfigs'])) {
                $model->scalingConfigs = [];
                $n1 = 0;
                foreach ($map['scalingConfigs'] as $item1) {
                    $model->scalingConfigs[$n1] = ScalingConfigStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
