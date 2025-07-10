<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsByApiResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePluginsByApiResponseBody\plugins\pluginAttribute;

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
        if (\is_array($this->pluginAttribute)) {
            Model::validateArray($this->pluginAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pluginAttribute) {
            if (\is_array($this->pluginAttribute)) {
                $res['PluginAttribute'] = [];
                $n1 = 0;
                foreach ($this->pluginAttribute as $item1) {
                    $res['PluginAttribute'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['PluginAttribute'])) {
            if (!empty($map['PluginAttribute'])) {
                $model->pluginAttribute = [];
                $n1 = 0;
                foreach ($map['PluginAttribute'] as $item1) {
                    $model->pluginAttribute[$n1] = pluginAttribute::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
