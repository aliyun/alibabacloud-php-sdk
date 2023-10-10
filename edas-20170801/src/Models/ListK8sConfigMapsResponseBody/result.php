<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sConfigMapsResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sConfigMapsResponseBody\result\configMaps;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The information about ConfigMaps.
     *
     * @var configMaps[]
     */
    public $configMaps;

    /**
     * @description The total number of entries that are returned.
     *
     * @example 6
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'configMaps' => 'ConfigMaps',
        'total'      => 'Total',
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
