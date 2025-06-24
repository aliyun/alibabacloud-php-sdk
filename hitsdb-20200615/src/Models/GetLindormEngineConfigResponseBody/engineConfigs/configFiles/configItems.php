<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormEngineConfigResponseBody\engineConfigs\configFiles;

use AlibabaCloud\Dara\Model;

class configItems extends Model
{
    /**
     * @var string
     */
    public $configItemKey;

    /**
     * @var string
     */
    public $configItemValue;
    protected $_name = [
        'configItemKey' => 'ConfigItemKey',
        'configItemValue' => 'ConfigItemValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configItemKey) {
            $res['ConfigItemKey'] = $this->configItemKey;
        }

        if (null !== $this->configItemValue) {
            $res['ConfigItemValue'] = $this->configItemValue;
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
        if (isset($map['ConfigItemKey'])) {
            $model->configItemKey = $map['ConfigItemKey'];
        }

        if (isset($map['ConfigItemValue'])) {
            $model->configItemValue = $map['ConfigItemValue'];
        }

        return $model;
    }
}
