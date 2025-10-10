<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\launchConfiguration;

use AlibabaCloud\Dara\Model;

class cpuOptions extends Model
{
    /**
     * @var int
     */
    public $core;

    /**
     * @var int
     */
    public $threadsPerCore;
    protected $_name = [
        'core' => 'Core',
        'threadsPerCore' => 'ThreadsPerCore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->core) {
            $res['Core'] = $this->core;
        }

        if (null !== $this->threadsPerCore) {
            $res['ThreadsPerCore'] = $this->threadsPerCore;
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
        if (isset($map['Core'])) {
            $model->core = $map['Core'];
        }

        if (isset($map['ThreadsPerCore'])) {
            $model->threadsPerCore = $map['ThreadsPerCore'];
        }

        return $model;
    }
}
