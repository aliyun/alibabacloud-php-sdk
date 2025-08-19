<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class GetScalingConfigStatusOutput extends Model
{
    /**
     * @var ScalingConfigStatus
     */
    public $scalingConfigStatus;
    protected $_name = [
        'scalingConfigStatus' => 'scalingConfigStatus',
    ];

    public function validate()
    {
        if (null !== $this->scalingConfigStatus) {
            $this->scalingConfigStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scalingConfigStatus) {
            $res['scalingConfigStatus'] = null !== $this->scalingConfigStatus ? $this->scalingConfigStatus->toArray($noStream) : $this->scalingConfigStatus;
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
        if (isset($map['scalingConfigStatus'])) {
            $model->scalingConfigStatus = ScalingConfigStatus::fromMap($map['scalingConfigStatus']);
        }

        return $model;
    }
}
