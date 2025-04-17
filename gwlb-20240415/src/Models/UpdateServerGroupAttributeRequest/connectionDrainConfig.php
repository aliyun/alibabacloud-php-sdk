<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\UpdateServerGroupAttributeRequest;

use AlibabaCloud\Dara\Model;

class connectionDrainConfig extends Model
{
    /**
     * @var bool
     */
    public $connectionDrainEnabled;

    /**
     * @var int
     */
    public $connectionDrainTimeout;
    protected $_name = [
        'connectionDrainEnabled' => 'ConnectionDrainEnabled',
        'connectionDrainTimeout' => 'ConnectionDrainTimeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionDrainEnabled) {
            $res['ConnectionDrainEnabled'] = $this->connectionDrainEnabled;
        }

        if (null !== $this->connectionDrainTimeout) {
            $res['ConnectionDrainTimeout'] = $this->connectionDrainTimeout;
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
        if (isset($map['ConnectionDrainEnabled'])) {
            $model->connectionDrainEnabled = $map['ConnectionDrainEnabled'];
        }

        if (isset($map['ConnectionDrainTimeout'])) {
            $model->connectionDrainTimeout = $map['ConnectionDrainTimeout'];
        }

        return $model;
    }
}
