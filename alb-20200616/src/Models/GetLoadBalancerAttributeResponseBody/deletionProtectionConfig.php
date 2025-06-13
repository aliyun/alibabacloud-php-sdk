<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetLoadBalancerAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class deletionProtectionConfig extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $enabledTime;
    protected $_name = [
        'enabled' => 'Enabled',
        'enabledTime' => 'EnabledTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->enabledTime) {
            $res['EnabledTime'] = $this->enabledTime;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['EnabledTime'])) {
            $model->enabledTime = $map['EnabledTime'];
        }

        return $model;
    }
}
