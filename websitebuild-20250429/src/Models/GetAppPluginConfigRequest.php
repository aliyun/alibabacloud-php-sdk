<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class GetAppPluginConfigRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $pluginId;
    protected $_name = [
        'bizId' => 'BizId',
        'pluginId' => 'PluginId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }

        return $model;
    }
}
