<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListConfigResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListConfigResponseBody\configItems\configItem;
use AlibabaCloud\Tea\Model;

class configItems extends Model
{
    /**
     * @var configItem[]
     */
    public $configItem;
    protected $_name = [
        'configItem' => 'ConfigItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configItem) {
            $res['ConfigItem'] = [];
            if (null !== $this->configItem && \is_array($this->configItem)) {
                $n = 0;
                foreach ($this->configItem as $item) {
                    $res['ConfigItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigItem'])) {
            if (!empty($map['ConfigItem'])) {
                $model->configItem = [];
                $n                 = 0;
                foreach ($map['ConfigItem'] as $item) {
                    $model->configItem[$n++] = null !== $item ? configItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
