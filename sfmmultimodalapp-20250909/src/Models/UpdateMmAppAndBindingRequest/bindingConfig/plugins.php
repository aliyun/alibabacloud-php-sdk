<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppAndBindingRequest\bindingConfig;

use AlibabaCloud\Dara\Model;

class plugins extends Model
{
    /**
     * @var string
     */
    public $pluginCode;

    /**
     * @var string
     */
    public $pluginName;

    /**
     * @var string
     */
    public $pluginType;
    protected $_name = [
        'pluginCode' => 'PluginCode',
        'pluginName' => 'PluginName',
        'pluginType' => 'PluginType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pluginCode) {
            $res['PluginCode'] = $this->pluginCode;
        }

        if (null !== $this->pluginName) {
            $res['PluginName'] = $this->pluginName;
        }

        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
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
        if (isset($map['PluginCode'])) {
            $model->pluginCode = $map['PluginCode'];
        }

        if (isset($map['PluginName'])) {
            $model->pluginName = $map['PluginName'];
        }

        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }

        return $model;
    }
}
