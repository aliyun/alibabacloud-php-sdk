<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\dingNormalCard;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantResponseBody\messages\content\dingNormalCard\dynamicDataSourceConfigs\pullConfig;

class dynamicDataSourceConfigs extends Model
{
    /**
     * @var mixed[]
     */
    public $constParams;

    /**
     * @var string
     */
    public $dynamicDataSourceId;

    /**
     * @var pullConfig
     */
    public $pullConfig;
    protected $_name = [
        'constParams' => 'constParams',
        'dynamicDataSourceId' => 'dynamicDataSourceId',
        'pullConfig' => 'pullConfig',
    ];

    public function validate()
    {
        if (\is_array($this->constParams)) {
            Model::validateArray($this->constParams);
        }
        if (null !== $this->pullConfig) {
            $this->pullConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->constParams) {
            if (\is_array($this->constParams)) {
                $res['constParams'] = [];
                foreach ($this->constParams as $key1 => $value1) {
                    $res['constParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->dynamicDataSourceId) {
            $res['dynamicDataSourceId'] = $this->dynamicDataSourceId;
        }

        if (null !== $this->pullConfig) {
            $res['pullConfig'] = null !== $this->pullConfig ? $this->pullConfig->toArray($noStream) : $this->pullConfig;
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
        if (isset($map['constParams'])) {
            if (!empty($map['constParams'])) {
                $model->constParams = [];
                foreach ($map['constParams'] as $key1 => $value1) {
                    $model->constParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['dynamicDataSourceId'])) {
            $model->dynamicDataSourceId = $map['dynamicDataSourceId'];
        }

        if (isset($map['pullConfig'])) {
            $model->pullConfig = pullConfig::fromMap($map['pullConfig']);
        }

        return $model;
    }
}
