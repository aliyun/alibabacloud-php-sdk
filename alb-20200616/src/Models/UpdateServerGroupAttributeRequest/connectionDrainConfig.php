<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateServerGroupAttributeRequest;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return connectionDrainConfig
     */
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
