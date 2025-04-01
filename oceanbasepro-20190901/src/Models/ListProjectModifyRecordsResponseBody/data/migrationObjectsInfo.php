<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\migrationObjectsInfo\tables;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\migrationObjectsInfo\tablesBlack;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\migrationObjectsInfo\views;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\migrationObjectsInfo\viewsBlack;

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
     * @var bool
     */
    public $wildcardMode;
    protected $_name = [
        'tables' => 'Tables',
        'tablesBlack' => 'TablesBlack',
        'views' => 'Views',
        'viewsBlack' => 'ViewsBlack',
        'wildcardMode' => 'WildcardMode',
    ];

    public function validate()
    {
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        if (\is_array($this->tablesBlack)) {
            Model::validateArray($this->tablesBlack);
        }
        if (\is_array($this->views)) {
            Model::validateArray($this->views);
        }
        if (\is_array($this->viewsBlack)) {
            Model::validateArray($this->viewsBlack);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['Tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['Tables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tablesBlack) {
            if (\is_array($this->tablesBlack)) {
                $res['TablesBlack'] = [];
                $n1 = 0;
                foreach ($this->tablesBlack as $item1) {
                    $res['TablesBlack'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->views) {
            if (\is_array($this->views)) {
                $res['Views'] = [];
                $n1 = 0;
                foreach ($this->views as $item1) {
                    $res['Views'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->viewsBlack) {
            if (\is_array($this->viewsBlack)) {
                $res['ViewsBlack'] = [];
                $n1 = 0;
                foreach ($this->viewsBlack as $item1) {
                    $res['ViewsBlack'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->wildcardMode) {
            $res['WildcardMode'] = $this->wildcardMode;
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
        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n1 = 0;
                foreach ($map['Tables'] as $item1) {
                    $model->tables[$n1++] = tables::fromMap($item1);
                }
            }
        }

        if (isset($map['TablesBlack'])) {
            if (!empty($map['TablesBlack'])) {
                $model->tablesBlack = [];
                $n1 = 0;
                foreach ($map['TablesBlack'] as $item1) {
                    $model->tablesBlack[$n1++] = tablesBlack::fromMap($item1);
                }
            }
        }

        if (isset($map['Views'])) {
            if (!empty($map['Views'])) {
                $model->views = [];
                $n1 = 0;
                foreach ($map['Views'] as $item1) {
                    $model->views[$n1++] = views::fromMap($item1);
                }
            }
        }

        if (isset($map['ViewsBlack'])) {
            if (!empty($map['ViewsBlack'])) {
                $model->viewsBlack = [];
                $n1 = 0;
                foreach ($map['ViewsBlack'] as $item1) {
                    $model->viewsBlack[$n1++] = viewsBlack::fromMap($item1);
                }
            }
        }

        if (isset($map['WildcardMode'])) {
            $model->wildcardMode = $map['WildcardMode'];
        }

        return $model;
    }
}
