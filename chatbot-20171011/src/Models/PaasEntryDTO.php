<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasEntryDTO extends Model
{
    /**
     * @var PaasEntryPluginFieldDataDTO
     */
    public $pluginFieldDataEntry;
    protected $_name = [
        'pluginFieldDataEntry' => 'PluginFieldDataEntry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pluginFieldDataEntry) {
            $res['PluginFieldDataEntry'] = null !== $this->pluginFieldDataEntry ? $this->pluginFieldDataEntry->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasEntryDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PluginFieldDataEntry'])) {
            $model->pluginFieldDataEntry = PaasEntryPluginFieldDataDTO::fromMap($map['PluginFieldDataEntry']);
        }

        return $model;
    }
}
