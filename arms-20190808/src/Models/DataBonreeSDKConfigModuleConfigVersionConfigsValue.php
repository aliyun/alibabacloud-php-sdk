<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DataBonreeSDKConfigModuleConfigVersionConfigsValue extends Model
{
    /**
     * @var bool
     */
    public $useCustom;

    /**
     * @var DataBonreeSDKConfigModuleConfigVersionConfigsValueCustomConfigValue[]
     */
    public $customConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'useCustom' => 'useCustom',
        'customConfig' => 'customConfig',
        'description' => 'description',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (\is_array($this->customConfig)) {
            Model::validateArray($this->customConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->useCustom) {
            $res['useCustom'] = $this->useCustom;
        }

        if (null !== $this->customConfig) {
            if (\is_array($this->customConfig)) {
                $res['customConfig'] = [];
                foreach ($this->customConfig as $key1 => $value1) {
                    $res['customConfig'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['useCustom'])) {
            $model->useCustom = $map['useCustom'];
        }

        if (isset($map['customConfig'])) {
            if (!empty($map['customConfig'])) {
                $model->customConfig = [];
                foreach ($map['customConfig'] as $key1 => $value1) {
                    $model->customConfig[$key1] = DataBonreeSDKConfigModuleConfigVersionConfigsValueCustomConfigValue::fromMap($value1);
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
