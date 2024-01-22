<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListNamespacedConfigMapsResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListNamespacedConfigMapsResponseBody\data\configMaps;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ConfigMap instances.
     *
     * @var configMaps[]
     */
    public $configMaps;
    protected $_name = [
        'configMaps' => 'ConfigMaps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configMaps) {
            $res['ConfigMaps'] = [];
            if (null !== $this->configMaps && \is_array($this->configMaps)) {
                $n = 0;
                foreach ($this->configMaps as $item) {
                    $res['ConfigMaps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigMaps'])) {
            if (!empty($map['ConfigMaps'])) {
                $model->configMaps = [];
                $n                 = 0;
                foreach ($map['ConfigMaps'] as $item) {
                    $model->configMaps[$n++] = null !== $item ? configMaps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
