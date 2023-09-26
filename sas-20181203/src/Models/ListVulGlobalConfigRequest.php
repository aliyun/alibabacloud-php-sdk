<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListVulGlobalConfigRequest extends Model
{
    /**
     * @example vul_scan_ip_list
     *
     * @var string
     */
    public $configKey;
    protected $_name = [
        'configKey' => 'ConfigKey',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVulGlobalConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigKey'])) {
            $model->configKey = $map['ConfigKey'];
        }

        return $model;
    }
}
