<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class MeteringConfig extends Model
{
    /**
     * @var LogConfig
     */
    public $logConfig;

    /**
     * @var string
     */
    public $payerId;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'logConfig' => 'logConfig',
        'payerId'   => 'payerId',
        'role'      => 'role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logConfig) {
            $res['logConfig'] = null !== $this->logConfig ? $this->logConfig->toMap() : null;
        }
        if (null !== $this->payerId) {
            $res['payerId'] = $this->payerId;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MeteringConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logConfig'])) {
            $model->logConfig = LogConfig::fromMap($map['logConfig']);
        }
        if (isset($map['payerId'])) {
            $model->payerId = $map['payerId'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        return $model;
    }
}
