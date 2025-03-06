<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsByApiResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsByApiResponseBody\plugins\pluginAttribute;
use AlibabaCloud\Tea\Model;

class plugins extends Model
{
    /**
     * @var pluginAttribute[]
     */
    public $pluginAttribute;
    protected $_name = [
        'pluginAttribute' => 'PluginAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pluginAttribute) {
            $res['PluginAttribute'] = [];
            if (null !== $this->pluginAttribute && \is_array($this->pluginAttribute)) {
                $n = 0;
                foreach ($this->pluginAttribute as $item) {
                    $res['PluginAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return plugins
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PluginAttribute'])) {
            if (!empty($map['PluginAttribute'])) {
                $model->pluginAttribute = [];
                $n                      = 0;
                foreach ($map['PluginAttribute'] as $item) {
                    $model->pluginAttribute[$n++] = null !== $item ? pluginAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
