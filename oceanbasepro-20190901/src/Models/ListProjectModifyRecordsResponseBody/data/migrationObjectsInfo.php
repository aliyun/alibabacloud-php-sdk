<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\migrationObjectsInfo\tables;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\migrationObjectsInfo\tablesBlack;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\migrationObjectsInfo\views;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\migrationObjectsInfo\viewsBlack;
use AlibabaCloud\Tea\Model;

class migrationObjectsInfo extends Model
{
    /**
     * @var tables[]
     */
    public $tables;

    /**
     * @var tablesBlack[]
     */
    public $tablesBlack;

    /**
     * @var views[]
     */
    public $views;

    /**
     * @var viewsBlack[]
     */
    public $viewsBlack;

    /**
     * @example true
     *
     * @var bool
     */
    public $wildcardMode;
    protected $_name = [
        'tables'       => 'Tables',
        'tablesBlack'  => 'TablesBlack',
        'views'        => 'Views',
        'viewsBlack'   => 'ViewsBlack',
        'wildcardMode' => 'WildcardMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tables) {
            $res['Tables'] = [];
            if (null !== $this->tables && \is_array($this->tables)) {
                $n = 0;
                foreach ($this->tables as $item) {
                    $res['Tables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tablesBlack) {
            $res['TablesBlack'] = [];
            if (null !== $this->tablesBlack && \is_array($this->tablesBlack)) {
                $n = 0;
                foreach ($this->tablesBlack as $item) {
                    $res['TablesBlack'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->views) {
            $res['Views'] = [];
            if (null !== $this->views && \is_array($this->views)) {
                $n = 0;
                foreach ($this->views as $item) {
                    $res['Views'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->viewsBlack) {
            $res['ViewsBlack'] = [];
            if (null !== $this->viewsBlack && \is_array($this->viewsBlack)) {
                $n = 0;
                foreach ($this->viewsBlack as $item) {
                    $res['ViewsBlack'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->wildcardMode) {
            $res['WildcardMode'] = $this->wildcardMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrationObjectsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n             = 0;
                foreach ($map['Tables'] as $item) {
                    $model->tables[$n++] = null !== $item ? tables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TablesBlack'])) {
            if (!empty($map['TablesBlack'])) {
                $model->tablesBlack = [];
                $n                  = 0;
                foreach ($map['TablesBlack'] as $item) {
                    $model->tablesBlack[$n++] = null !== $item ? tablesBlack::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Views'])) {
            if (!empty($map['Views'])) {
                $model->views = [];
                $n            = 0;
                foreach ($map['Views'] as $item) {
                    $model->views[$n++] = null !== $item ? views::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ViewsBlack'])) {
            if (!empty($map['ViewsBlack'])) {
                $model->viewsBlack = [];
                $n                 = 0;
                foreach ($map['ViewsBlack'] as $item) {
                    $model->viewsBlack[$n++] = null !== $item ? viewsBlack::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WildcardMode'])) {
            $model->wildcardMode = $map['WildcardMode'];
        }

        return $model;
    }
}
