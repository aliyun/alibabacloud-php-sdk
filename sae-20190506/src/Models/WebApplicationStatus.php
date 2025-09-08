<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class WebApplicationStatus extends Model
{
    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var WebScalingConfig
     */
    public $webScalingConfig;
    protected $_name = [
        'instanceCount' => 'InstanceCount',
        'webScalingConfig' => 'WebScalingConfig',
    ];

    public function validate()
    {
        if (null !== $this->webScalingConfig) {
            $this->webScalingConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }

        if (null !== $this->webScalingConfig) {
            $res['WebScalingConfig'] = null !== $this->webScalingConfig ? $this->webScalingConfig->toArray($noStream) : $this->webScalingConfig;
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
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }

        if (isset($map['WebScalingConfig'])) {
            $model->webScalingConfig = WebScalingConfig::fromMap($map['WebScalingConfig']);
        }

        return $model;
    }
}
