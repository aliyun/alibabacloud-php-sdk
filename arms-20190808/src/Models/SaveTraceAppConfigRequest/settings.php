<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SaveTraceAppConfigRequest;

use AlibabaCloud\Tea\Model;

class settings extends Model
{
    /**
     * @description The values of the settings that you want to modify. For information about the supported settings, see the following items:
     *
     *   Trace sampling settings
     *   Main switch settings
     *   Threshold settings
     *   Advanced settings
     *   Thread settings
     *   Memory snapshot settings
     *   URL convergence settings
     *   Business log association settings
     *   Business monitoring settings
     *
     * @example sampling.enable
     *
     * @var string
     */
    public $key;

    /**
     * @description The values of the settings that you want to modify. For information about the supported settings, see the following items:
     *
     *   Trace sampling settings
     *   Main switch settings
     *   Threshold settings
     *   Advanced settings
     *   Thread settings
     *   Memory snapshot settings
     *   URL convergence settings
     *   Business log association settings
     *   Business monitoring settings
     *
     * @example true
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return settings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
