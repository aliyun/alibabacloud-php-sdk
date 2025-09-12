<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class InstanceConfigDto extends Model
{
    /**
     * @var string
     */
    public $configKey;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $configValue;

    /**
     * @var string
     */
    public $nodeGroupId;
    protected $_name = [
        'configKey' => 'configKey',
        'configType' => 'configType',
        'configValue' => 'configValue',
        'nodeGroupId' => 'nodeGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configKey) {
            $res['configKey'] = $this->configKey;
        }

        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }

        if (null !== $this->configValue) {
            $res['configValue'] = $this->configValue;
        }

        if (null !== $this->nodeGroupId) {
            $res['nodeGroupId'] = $this->nodeGroupId;
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
        if (isset($map['configKey'])) {
            $model->configKey = $map['configKey'];
        }

        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }

        if (isset($map['configValue'])) {
            $model->configValue = $map['configValue'];
        }

        if (isset($map['nodeGroupId'])) {
            $model->nodeGroupId = $map['nodeGroupId'];
        }

        return $model;
    }
}
