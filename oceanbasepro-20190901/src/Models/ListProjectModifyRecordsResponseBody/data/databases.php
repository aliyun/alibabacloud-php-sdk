<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\databases\specificTables;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\databases\specificViews;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\databases\tables;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\databases\views;

class databases extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $mappedName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var specificTables[]
     */
    public $specificTables;

    /**
     * @var specificViews[]
     */
    public $specificViews;

    /**
     * @var tables[]
     */
    public $tables;

    /**
     * @var views[]
     */
    public $views;
    protected $_name = [
        'id' => 'Id',
        'mappedName' => 'MappedName',
        'name' => 'Name',
        'specificTables' => 'SpecificTables',
        'specificViews' => 'SpecificViews',
        'tables' => 'Tables',
        'views' => 'Views',
    ];

    public function validate()
    {
        if (\is_array($this->specificTables)) {
            Model::validateArray($this->specificTables);
        }
        if (\is_array($this->specificViews)) {
            Model::validateArray($this->specificViews);
        }
        if (\is_array($this->tables)) {
            Model::validateArray($this->tables);
        }
        if (\is_array($this->views)) {
            Model::validateArray($this->views);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->mappedName) {
            $res['MappedName'] = $this->mappedName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->specificTables) {
            if (\is_array($this->specificTables)) {
                $res['SpecificTables'] = [];
                $n1 = 0;
                foreach ($this->specificTables as $item1) {
                    $res['SpecificTables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->specificViews) {
            if (\is_array($this->specificViews)) {
                $res['SpecificViews'] = [];
                $n1 = 0;
                foreach ($this->specificViews as $item1) {
                    $res['SpecificViews'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tables) {
            if (\is_array($this->tables)) {
                $res['Tables'] = [];
                $n1 = 0;
                foreach ($this->tables as $item1) {
                    $res['Tables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->views) {
            if (\is_array($this->views)) {
                $res['Views'] = [];
                $n1 = 0;
                foreach ($this->views as $item1) {
                    $res['Views'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MappedName'])) {
            $model->mappedName = $map['MappedName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SpecificTables'])) {
            if (!empty($map['SpecificTables'])) {
                $model->specificTables = [];
                $n1 = 0;
                foreach ($map['SpecificTables'] as $item1) {
                    $model->specificTables[$n1] = specificTables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SpecificViews'])) {
            if (!empty($map['SpecificViews'])) {
                $model->specificViews = [];
                $n1 = 0;
                foreach ($map['SpecificViews'] as $item1) {
                    $model->specificViews[$n1] = specificViews::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Tables'])) {
            if (!empty($map['Tables'])) {
                $model->tables = [];
                $n1 = 0;
                foreach ($map['Tables'] as $item1) {
                    $model->tables[$n1] = tables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Views'])) {
            if (!empty($map['Views'])) {
                $model->views = [];
                $n1 = 0;
                foreach ($map['Views'] as $item1) {
                    $model->views[$n1] = views::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
