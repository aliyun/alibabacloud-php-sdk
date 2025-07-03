<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\transferMapping\blackTableRules;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\transferMapping\blackViewRules;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\transferMapping\databases;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\transferMapping\databasesBlack;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\transferMapping\schemas;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\transferMapping\whiteTableRules;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\transferMapping\whiteViewRules;

class transferMapping extends Model
{
    /**
     * @var blackTableRules[]
     */
    public $blackTableRules;

    /**
     * @var blackViewRules[]
     */
    public $blackViewRules;

    /**
     * @var databases[]
     */
    public $databases;

    /**
     * @var databasesBlack[]
     */
    public $databasesBlack;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var schemas[]
     */
    public $schemas;

    /**
     * @var string[]
     */
    public $tableAndViewBlackList;

    /**
     * @var string[]
     */
    public $tableAndViewWhiteList;

    /**
     * @var whiteTableRules[]
     */
    public $whiteTableRules;

    /**
     * @var whiteViewRules[]
     */
    public $whiteViewRules;
    protected $_name = [
        'blackTableRules' => 'BlackTableRules',
        'blackViewRules' => 'BlackViewRules',
        'databases' => 'Databases',
        'databasesBlack' => 'DatabasesBlack',
        'mode' => 'Mode',
        'schemas' => 'Schemas',
        'tableAndViewBlackList' => 'TableAndViewBlackList',
        'tableAndViewWhiteList' => 'TableAndViewWhiteList',
        'whiteTableRules' => 'WhiteTableRules',
        'whiteViewRules' => 'WhiteViewRules',
    ];

    public function validate()
    {
        if (\is_array($this->blackTableRules)) {
            Model::validateArray($this->blackTableRules);
        }
        if (\is_array($this->blackViewRules)) {
            Model::validateArray($this->blackViewRules);
        }
        if (\is_array($this->databases)) {
            Model::validateArray($this->databases);
        }
        if (\is_array($this->databasesBlack)) {
            Model::validateArray($this->databasesBlack);
        }
        if (\is_array($this->schemas)) {
            Model::validateArray($this->schemas);
        }
        if (\is_array($this->tableAndViewBlackList)) {
            Model::validateArray($this->tableAndViewBlackList);
        }
        if (\is_array($this->tableAndViewWhiteList)) {
            Model::validateArray($this->tableAndViewWhiteList);
        }
        if (\is_array($this->whiteTableRules)) {
            Model::validateArray($this->whiteTableRules);
        }
        if (\is_array($this->whiteViewRules)) {
            Model::validateArray($this->whiteViewRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blackTableRules) {
            if (\is_array($this->blackTableRules)) {
                $res['BlackTableRules'] = [];
                $n1 = 0;
                foreach ($this->blackTableRules as $item1) {
                    $res['BlackTableRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->blackViewRules) {
            if (\is_array($this->blackViewRules)) {
                $res['BlackViewRules'] = [];
                $n1 = 0;
                foreach ($this->blackViewRules as $item1) {
                    $res['BlackViewRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->databases) {
            if (\is_array($this->databases)) {
                $res['Databases'] = [];
                $n1 = 0;
                foreach ($this->databases as $item1) {
                    $res['Databases'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->databasesBlack) {
            if (\is_array($this->databasesBlack)) {
                $res['DatabasesBlack'] = [];
                $n1 = 0;
                foreach ($this->databasesBlack as $item1) {
                    $res['DatabasesBlack'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->schemas) {
            if (\is_array($this->schemas)) {
                $res['Schemas'] = [];
                $n1 = 0;
                foreach ($this->schemas as $item1) {
                    $res['Schemas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tableAndViewBlackList) {
            if (\is_array($this->tableAndViewBlackList)) {
                $res['TableAndViewBlackList'] = [];
                $n1 = 0;
                foreach ($this->tableAndViewBlackList as $item1) {
                    $res['TableAndViewBlackList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tableAndViewWhiteList) {
            if (\is_array($this->tableAndViewWhiteList)) {
                $res['TableAndViewWhiteList'] = [];
                $n1 = 0;
                foreach ($this->tableAndViewWhiteList as $item1) {
                    $res['TableAndViewWhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->whiteTableRules) {
            if (\is_array($this->whiteTableRules)) {
                $res['WhiteTableRules'] = [];
                $n1 = 0;
                foreach ($this->whiteTableRules as $item1) {
                    $res['WhiteTableRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->whiteViewRules) {
            if (\is_array($this->whiteViewRules)) {
                $res['WhiteViewRules'] = [];
                $n1 = 0;
                foreach ($this->whiteViewRules as $item1) {
                    $res['WhiteViewRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BlackTableRules'])) {
            if (!empty($map['BlackTableRules'])) {
                $model->blackTableRules = [];
                $n1 = 0;
                foreach ($map['BlackTableRules'] as $item1) {
                    $model->blackTableRules[$n1] = blackTableRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BlackViewRules'])) {
            if (!empty($map['BlackViewRules'])) {
                $model->blackViewRules = [];
                $n1 = 0;
                foreach ($map['BlackViewRules'] as $item1) {
                    $model->blackViewRules[$n1] = blackViewRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = [];
                $n1 = 0;
                foreach ($map['Databases'] as $item1) {
                    $model->databases[$n1] = databases::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DatabasesBlack'])) {
            if (!empty($map['DatabasesBlack'])) {
                $model->databasesBlack = [];
                $n1 = 0;
                foreach ($map['DatabasesBlack'] as $item1) {
                    $model->databasesBlack[$n1] = databasesBlack::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Schemas'])) {
            if (!empty($map['Schemas'])) {
                $model->schemas = [];
                $n1 = 0;
                foreach ($map['Schemas'] as $item1) {
                    $model->schemas[$n1] = schemas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TableAndViewBlackList'])) {
            if (!empty($map['TableAndViewBlackList'])) {
                $model->tableAndViewBlackList = [];
                $n1 = 0;
                foreach ($map['TableAndViewBlackList'] as $item1) {
                    $model->tableAndViewBlackList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TableAndViewWhiteList'])) {
            if (!empty($map['TableAndViewWhiteList'])) {
                $model->tableAndViewWhiteList = [];
                $n1 = 0;
                foreach ($map['TableAndViewWhiteList'] as $item1) {
                    $model->tableAndViewWhiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WhiteTableRules'])) {
            if (!empty($map['WhiteTableRules'])) {
                $model->whiteTableRules = [];
                $n1 = 0;
                foreach ($map['WhiteTableRules'] as $item1) {
                    $model->whiteTableRules[$n1] = whiteTableRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WhiteViewRules'])) {
            if (!empty($map['WhiteViewRules'])) {
                $model->whiteViewRules = [];
                $n1 = 0;
                foreach ($map['WhiteViewRules'] as $item1) {
                    $model->whiteViewRules[$n1] = whiteViewRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
