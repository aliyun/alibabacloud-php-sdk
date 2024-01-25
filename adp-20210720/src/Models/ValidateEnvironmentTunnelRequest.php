<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\ValidateEnvironmentTunnelRequest\tunnelConfig;
use AlibabaCloud\Tea\Model;

class ValidateEnvironmentTunnelRequest extends Model
{
    /**
     * @var tunnelConfig
     */
    public $tunnelConfig;

    /**
     * @example jumpServer
     *
     * @var string
     */
    public $tunnelType;
    protected $_name = [
        'tunnelConfig' => 'tunnelConfig',
        'tunnelType'   => 'tunnelType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tunnelConfig) {
            $res['tunnelConfig'] = null !== $this->tunnelConfig ? $this->tunnelConfig->toMap() : null;
        }
        if (null !== $this->tunnelType) {
            $res['tunnelType'] = $this->tunnelType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateEnvironmentTunnelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tunnelConfig'])) {
            $model->tunnelConfig = tunnelConfig::fromMap($map['tunnelConfig']);
        }
        if (isset($map['tunnelType'])) {
            $model->tunnelType = $map['tunnelType'];
        }

        return $model;
    }
}
