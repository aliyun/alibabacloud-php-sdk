<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasSlotDTO extends Model
{
    /**
     * @var PaasSlotPluginFieldDataDTO
     */
    public $pluginFieldDataSlot;
    protected $_name = [
        'pluginFieldDataSlot' => 'PluginFieldDataSlot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pluginFieldDataSlot) {
            $res['PluginFieldDataSlot'] = null !== $this->pluginFieldDataSlot ? $this->pluginFieldDataSlot->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasSlotDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PluginFieldDataSlot'])) {
            $model->pluginFieldDataSlot = PaasSlotPluginFieldDataDTO::fromMap($map['PluginFieldDataSlot']);
        }

        return $model;
    }
}
