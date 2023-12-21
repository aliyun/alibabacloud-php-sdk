<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstancesResponseBody\instances;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstancesResponseBody\instances\config\dataManagements;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstancesResponseBody\instances\config\engines;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstancesResponseBody\instances\config\monitors;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var dataManagements[]
     */
    public $dataManagements;

    /**
     * @var engines[]
     */
    public $engines;

    /**
     * @var monitors[]
     */
    public $monitors;
    protected $_name = [
        'dataManagements' => 'DataManagements',
        'engines'         => 'Engines',
        'monitors'        => 'Monitors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataManagements) {
            $res['DataManagements'] = [];
            if (null !== $this->dataManagements && \is_array($this->dataManagements)) {
                $n = 0;
                foreach ($this->dataManagements as $item) {
                    $res['DataManagements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->engines) {
            $res['Engines'] = [];
            if (null !== $this->engines && \is_array($this->engines)) {
                $n = 0;
                foreach ($this->engines as $item) {
                    $res['Engines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->monitors) {
            $res['Monitors'] = [];
            if (null !== $this->monitors && \is_array($this->monitors)) {
                $n = 0;
                foreach ($this->monitors as $item) {
                    $res['Monitors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataManagements'])) {
            if (!empty($map['DataManagements'])) {
                $model->dataManagements = [];
                $n                      = 0;
                foreach ($map['DataManagements'] as $item) {
                    $model->dataManagements[$n++] = null !== $item ? dataManagements::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Engines'])) {
            if (!empty($map['Engines'])) {
                $model->engines = [];
                $n              = 0;
                foreach ($map['Engines'] as $item) {
                    $model->engines[$n++] = null !== $item ? engines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Monitors'])) {
            if (!empty($map['Monitors'])) {
                $model->monitors = [];
                $n               = 0;
                foreach ($map['Monitors'] as $item) {
                    $model->monitors[$n++] = null !== $item ? monitors::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
