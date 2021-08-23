<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasResponseDTO extends Model
{
    /**
     * @var PaasResponsePluginFieldDataDTO
     */
    public $pluginFieldDataResponse;
    protected $_name = [
        'pluginFieldDataResponse' => 'PluginFieldDataResponse',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pluginFieldDataResponse) {
            $res['PluginFieldDataResponse'] = null !== $this->pluginFieldDataResponse ? $this->pluginFieldDataResponse->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasResponseDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PluginFieldDataResponse'])) {
            $model->pluginFieldDataResponse = PaasResponsePluginFieldDataDTO::fromMap($map['PluginFieldDataResponse']);
        }

        return $model;
    }
}
