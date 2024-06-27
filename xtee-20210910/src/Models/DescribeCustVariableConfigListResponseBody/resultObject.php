<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeCustVariableConfigListResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
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
        'configKey'   => 'configKey',
        'configValue' => 'configValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configKey) {
            $res['configKey'] = $this->configKey;
        }
        if (null !== $this->configValue) {
            $res['configValue'] = $this->configValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configKey'])) {
            $model->configKey = $map['configKey'];
        }
        if (isset($map['configValue'])) {
            $model->configValue = $map['configValue'];
        }

        return $model;
    }
}
