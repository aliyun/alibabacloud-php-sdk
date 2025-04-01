<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\transferMapping\databases;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\transferMapping\databasesBlack;

class transferMapping extends Model
{
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
     * @var string[]
     */
    public $tableAndViewBlackList;

    /**
     * @var string[]
     */
    public $tableAndViewWhiteList;
    protected $_name = [
        'databases' => 'Databases',
        'databasesBlack' => 'DatabasesBlack',
        'mode' => 'Mode',
        'tableAndViewBlackList' => 'TableAndViewBlackList',
        'tableAndViewWhiteList' => 'TableAndViewWhiteList',
    ];

    public function validate()
    {
        if (\is_array($this->databases)) {
            Model::validateArray($this->databases);
        }
        if (\is_array($this->databasesBlack)) {
            Model::validateArray($this->databasesBlack);
        }
        if (\is_array($this->tableAndViewBlackList)) {
            Model::validateArray($this->tableAndViewBlackList);
        }
        if (\is_array($this->tableAndViewWhiteList)) {
            Model::validateArray($this->tableAndViewWhiteList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databases) {
            if (\is_array($this->databases)) {
                $res['Databases'] = [];
                $n1 = 0;
                foreach ($this->databases as $item1) {
                    $res['Databases'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->databasesBlack) {
            if (\is_array($this->databasesBlack)) {
                $res['DatabasesBlack'] = [];
                $n1 = 0;
                foreach ($this->databasesBlack as $item1) {
                    $res['DatabasesBlack'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->tableAndViewBlackList) {
            if (\is_array($this->tableAndViewBlackList)) {
                $res['TableAndViewBlackList'] = [];
                $n1 = 0;
                foreach ($this->tableAndViewBlackList as $item1) {
                    $res['TableAndViewBlackList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tableAndViewWhiteList) {
            if (\is_array($this->tableAndViewWhiteList)) {
                $res['TableAndViewWhiteList'] = [];
                $n1 = 0;
                foreach ($this->tableAndViewWhiteList as $item1) {
                    $res['TableAndViewWhiteList'][$n1++] = $item1;
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
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = [];
                $n1 = 0;
                foreach ($map['Databases'] as $item1) {
                    $model->databases[$n1++] = databases::fromMap($item1);
                }
            }
        }

        if (isset($map['DatabasesBlack'])) {
            if (!empty($map['DatabasesBlack'])) {
                $model->databasesBlack = [];
                $n1 = 0;
                foreach ($map['DatabasesBlack'] as $item1) {
                    $model->databasesBlack[$n1++] = databasesBlack::fromMap($item1);
                }
            }
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['TableAndViewBlackList'])) {
            if (!empty($map['TableAndViewBlackList'])) {
                $model->tableAndViewBlackList = [];
                $n1 = 0;
                foreach ($map['TableAndViewBlackList'] as $item1) {
                    $model->tableAndViewBlackList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TableAndViewWhiteList'])) {
            if (!empty($map['TableAndViewWhiteList'])) {
                $model->tableAndViewWhiteList = [];
                $n1 = 0;
                foreach ($map['TableAndViewWhiteList'] as $item1) {
                    $model->tableAndViewWhiteList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
