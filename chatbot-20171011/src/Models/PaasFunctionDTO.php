<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasFunctionDTO extends Model
{
    /**
     * @var PaasFunctionPluginFieldDataDTO
     */
    public $pluginFieldDataFunction;
    protected $_name = [
        'pluginFieldDataFunction' => 'PluginFieldDataFunction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pluginFieldDataFunction) {
            $res['PluginFieldDataFunction'] = null !== $this->pluginFieldDataFunction ? $this->pluginFieldDataFunction->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasFunctionDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PluginFieldDataFunction'])) {
            $model->pluginFieldDataFunction = PaasFunctionPluginFieldDataDTO::fromMap($map['PluginFieldDataFunction']);
        }

        return $model;
    }
}
