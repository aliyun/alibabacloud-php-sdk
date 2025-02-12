<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginSchemasResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginSchemasResponseBody\pluginSchemas\pluginSchema;

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
        if (\is_array($this->pluginSchema)) {
            Model::validateArray($this->pluginSchema);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pluginSchema) {
            if (\is_array($this->pluginSchema)) {
                $res['PluginSchema'] = [];
                $n1                  = 0;
                foreach ($this->pluginSchema as $item1) {
                    $res['PluginSchema'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['PluginSchema'])) {
            if (!empty($map['PluginSchema'])) {
                $model->pluginSchema = [];
                $n1                  = 0;
                foreach ($map['PluginSchema'] as $item1) {
                    $model->pluginSchema[$n1++] = pluginSchema::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
