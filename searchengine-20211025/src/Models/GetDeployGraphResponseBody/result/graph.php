<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result\graph\indexMetas;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result\graph\onlineMaster;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result\graph\tableMetas;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result\graph\zoneMetas;
use AlibabaCloud\Tea\Model;

class graph extends Model
{
    /**
     * @description The index metadata.
     *
     * @var indexMetas[]
     */
    public $indexMetas;

    /**
     * @description The metadata of online clusters.
     *
     * @var onlineMaster[]
     */
    public $onlineMaster;

    /**
     * @description The association relationships between data sources and indexes.
     *
     * @var string[][]
     */
    public $tableIndexRelation;

    /**
     * @description The metadata of data sources.
     *
     * @var tableMetas[]
     */
    public $tableMetas;

    /**
     * @description The association relationships between zones and indexes.
     *
     * @var string[][]
     */
    public $zoneIndexRelation;

    /**
     * @description The zone metadata.
     *
     * @var zoneMetas[]
     */
    public $zoneMetas;
    protected $_name = [
        'indexMetas'         => 'indexMetas',
        'onlineMaster'       => 'onlineMaster',
        'tableIndexRelation' => 'tableIndexRelation',
        'tableMetas'         => 'tableMetas',
        'zoneIndexRelation'  => 'zoneIndexRelation',
        'zoneMetas'          => 'zoneMetas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexMetas) {
            $res['indexMetas'] = [];
            if (null !== $this->indexMetas && \is_array($this->indexMetas)) {
                $n = 0;
                foreach ($this->indexMetas as $item) {
                    $res['indexMetas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->onlineMaster) {
            $res['onlineMaster'] = [];
            if (null !== $this->onlineMaster && \is_array($this->onlineMaster)) {
                $n = 0;
                foreach ($this->onlineMaster as $item) {
                    $res['onlineMaster'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableIndexRelation) {
            $res['tableIndexRelation'] = $this->tableIndexRelation;
        }
        if (null !== $this->tableMetas) {
            $res['tableMetas'] = [];
            if (null !== $this->tableMetas && \is_array($this->tableMetas)) {
                $n = 0;
                foreach ($this->tableMetas as $item) {
                    $res['tableMetas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneIndexRelation) {
            $res['zoneIndexRelation'] = $this->zoneIndexRelation;
        }
        if (null !== $this->zoneMetas) {
            $res['zoneMetas'] = [];
            if (null !== $this->zoneMetas && \is_array($this->zoneMetas)) {
                $n = 0;
                foreach ($this->zoneMetas as $item) {
                    $res['zoneMetas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return graph
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['indexMetas'])) {
            if (!empty($map['indexMetas'])) {
                $model->indexMetas = [];
                $n                 = 0;
                foreach ($map['indexMetas'] as $item) {
                    $model->indexMetas[$n++] = null !== $item ? indexMetas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['onlineMaster'])) {
            if (!empty($map['onlineMaster'])) {
                $model->onlineMaster = [];
                $n                   = 0;
                foreach ($map['onlineMaster'] as $item) {
                    $model->onlineMaster[$n++] = null !== $item ? onlineMaster::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tableIndexRelation'])) {
            $model->tableIndexRelation = $map['tableIndexRelation'];
        }
        if (isset($map['tableMetas'])) {
            if (!empty($map['tableMetas'])) {
                $model->tableMetas = [];
                $n                 = 0;
                foreach ($map['tableMetas'] as $item) {
                    $model->tableMetas[$n++] = null !== $item ? tableMetas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['zoneIndexRelation'])) {
            $model->zoneIndexRelation = $map['zoneIndexRelation'];
        }
        if (isset($map['zoneMetas'])) {
            if (!empty($map['zoneMetas'])) {
                $model->zoneMetas = [];
                $n                = 0;
                foreach ($map['zoneMetas'] as $item) {
                    $model->zoneMetas[$n++] = null !== $item ? zoneMetas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
