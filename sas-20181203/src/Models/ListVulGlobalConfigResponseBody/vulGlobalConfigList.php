<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListVulGlobalConfigResponseBody;

use AlibabaCloud\Tea\Model;

class vulGlobalConfigList extends Model
{
    /**
     * @example vul_scan_ip_list
     *
     * @var string
     */
    public $configKey;

    /**
     * @example 127.0.*.*,127.0.*.*
     *
     * @var string
     */
    public $configValue;
    protected $_name = [
        'configKey'   => 'ConfigKey',
        'configValue' => 'ConfigValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configKey) {
            $res['ConfigKey'] = $this->configKey;
        }
        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vulGlobalConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigKey'])) {
            $model->configKey = $map['ConfigKey'];
        }
        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }

        return $model;
    }
}
