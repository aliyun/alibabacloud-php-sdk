<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListVulGlobalConfigResponseBody;

use AlibabaCloud\Dara\Model;

class vulGlobalConfigList extends Model
{
    /**
     * @var string
     */
    public $configKey;
    /**
     * @var string
     */
    public $configValue;
    protected $_name = [
        'configKey'   => 'ConfigKey',
        'configValue' => 'ConfigValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
