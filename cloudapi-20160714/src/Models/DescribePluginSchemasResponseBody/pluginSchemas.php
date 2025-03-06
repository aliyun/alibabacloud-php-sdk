<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginSchemasResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginSchemasResponseBody\pluginSchemas\pluginSchema;
use AlibabaCloud\Tea\Model;

class pluginSchemas extends Model
{
    /**
     * @var pluginSchema[]
     */
    public $pluginSchema;
    protected $_name = [
        'pluginSchema' => 'PluginSchema',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pluginSchema) {
            $res['PluginSchema'] = [];
            if (null !== $this->pluginSchema && \is_array($this->pluginSchema)) {
                $n = 0;
                foreach ($this->pluginSchema as $item) {
                    $res['PluginSchema'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pluginSchemas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PluginSchema'])) {
            if (!empty($map['PluginSchema'])) {
                $model->pluginSchema = [];
                $n                   = 0;
                foreach ($map['PluginSchema'] as $item) {
                    $model->pluginSchema[$n++] = null !== $item ? pluginSchema::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
