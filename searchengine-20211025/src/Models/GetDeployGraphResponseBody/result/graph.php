<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result\graph\indexMetas;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result\graph\onlineMaster;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result\graph\tableMetas;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetDeployGraphResponseBody\result\graph\zoneMetas;

class graph extends Model
{
    /**
     * @var indexMetas[]
     */
    public $indexMetas;

    /**
     * @var onlineMaster[]
     */
    public $onlineMaster;

    /**
     * @var string[][]
     */
    public $tableIndexRelation;

    /**
     * @var tableMetas[]
     */
    public $tableMetas;

    /**
     * @var string[][]
     */
    public $zoneIndexRelation;

    /**
     * @var zoneMetas[]
     */
    public $zoneMetas;
    protected $_name = [
        'indexMetas' => 'indexMetas',
        'onlineMaster' => 'onlineMaster',
        'tableIndexRelation' => 'tableIndexRelation',
        'tableMetas' => 'tableMetas',
        'zoneIndexRelation' => 'zoneIndexRelation',
        'zoneMetas' => 'zoneMetas',
    ];

    public function validate()
    {
        if (\is_array($this->indexMetas)) {
            Model::validateArray($this->indexMetas);
        }
        if (\is_array($this->onlineMaster)) {
            Model::validateArray($this->onlineMaster);
        }
        if (\is_array($this->tableIndexRelation)) {
            Model::validateArray($this->tableIndexRelation);
        }
        if (\is_array($this->tableMetas)) {
            Model::validateArray($this->tableMetas);
        }
        if (\is_array($this->zoneIndexRelation)) {
            Model::validateArray($this->zoneIndexRelation);
        }
        if (\is_array($this->zoneMetas)) {
            Model::validateArray($this->zoneMetas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indexMetas) {
            if (\is_array($this->indexMetas)) {
                $res['indexMetas'] = [];
                $n1 = 0;
                foreach ($this->indexMetas as $item1) {
                    $res['indexMetas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->onlineMaster) {
            if (\is_array($this->onlineMaster)) {
                $res['onlineMaster'] = [];
                $n1 = 0;
                foreach ($this->onlineMaster as $item1) {
                    $res['onlineMaster'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tableIndexRelation) {
            if (\is_array($this->tableIndexRelation)) {
                $res['tableIndexRelation'] = [];
                foreach ($this->tableIndexRelation as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['tableIndexRelation'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['tableIndexRelation'][$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->tableMetas) {
            if (\is_array($this->tableMetas)) {
                $res['tableMetas'] = [];
                $n1 = 0;
                foreach ($this->tableMetas as $item1) {
                    $res['tableMetas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneIndexRelation) {
            if (\is_array($this->zoneIndexRelation)) {
                $res['zoneIndexRelation'] = [];
                foreach ($this->zoneIndexRelation as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['zoneIndexRelation'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['zoneIndexRelation'][$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->zoneMetas) {
            if (\is_array($this->zoneMetas)) {
                $res['zoneMetas'] = [];
                $n1 = 0;
                foreach ($this->zoneMetas as $item1) {
                    $res['zoneMetas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['indexMetas'])) {
            if (!empty($map['indexMetas'])) {
                $model->indexMetas = [];
                $n1 = 0;
                foreach ($map['indexMetas'] as $item1) {
                    $model->indexMetas[$n1] = indexMetas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['onlineMaster'])) {
            if (!empty($map['onlineMaster'])) {
                $model->onlineMaster = [];
                $n1 = 0;
                foreach ($map['onlineMaster'] as $item1) {
                    $model->onlineMaster[$n1] = onlineMaster::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['tableIndexRelation'])) {
            if (!empty($map['tableIndexRelation'])) {
                $model->tableIndexRelation = [];
                foreach ($map['tableIndexRelation'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->tableIndexRelation[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->tableIndexRelation[$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['tableMetas'])) {
            if (!empty($map['tableMetas'])) {
                $model->tableMetas = [];
                $n1 = 0;
                foreach ($map['tableMetas'] as $item1) {
                    $model->tableMetas[$n1] = tableMetas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['zoneIndexRelation'])) {
            if (!empty($map['zoneIndexRelation'])) {
                $model->zoneIndexRelation = [];
                foreach ($map['zoneIndexRelation'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->zoneIndexRelation[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->zoneIndexRelation[$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['zoneMetas'])) {
            if (!empty($map['zoneMetas'])) {
                $model->zoneMetas = [];
                $n1 = 0;
                foreach ($map['zoneMetas'] as $item1) {
                    $model->zoneMetas[$n1] = zoneMetas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
