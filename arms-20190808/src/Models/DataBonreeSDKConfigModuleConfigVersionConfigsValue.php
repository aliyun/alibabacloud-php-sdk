<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DataBonreeSDKConfigModuleConfigVersionConfigsValue extends Model
{
    /**
     * @description Indicates whether the custom configuration is used.
     *
     * @example true
     *
     * @var bool
     */
    public $useCustom;

    /**
     * @description The custom configuration.
     *
     * @var DataBonreeSDKConfigModuleConfigVersionConfigsValueCustomConfigValue[]
     */
    public $customConfig;

    /**
     * @description The description of the version configuration.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the version configuration was updated.
     *
     * @example 1721112372055
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'useCustom' => 'useCustom',
        'customConfig' => 'customConfig',
        'description' => 'description',
        'updateTime' => 'updateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->useCustom) {
            $res['useCustom'] = $this->useCustom;
        }
        if (null !== $this->customConfig) {
            $res['customConfig'] = [];
            if (null !== $this->customConfig && \is_array($this->customConfig)) {
                foreach ($this->customConfig as $key => $val) {
                    $res['customConfig'][$key] = null !== $val ? $val->toMap() : $val;
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

    /**
     * @param array $map
     *
     * @return DataBonreeSDKConfigModuleConfigVersionConfigsValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['useCustom'])) {
            $model->useCustom = $map['useCustom'];
        }
        if (isset($map['customConfig'])) {
            $model->customConfig = $map['customConfig'];
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
