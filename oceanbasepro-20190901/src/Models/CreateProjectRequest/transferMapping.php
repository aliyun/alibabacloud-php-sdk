<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\transferMapping\databases;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\transferMapping\databasesBlack;
use AlibabaCloud\Tea\Model;

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
     * @example SPCEIFIC
     *
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
        'databases'             => 'Databases',
        'databasesBlack'        => 'DatabasesBlack',
        'mode'                  => 'Mode',
        'tableAndViewBlackList' => 'TableAndViewBlackList',
        'tableAndViewWhiteList' => 'TableAndViewWhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databases) {
            $res['Databases'] = [];
            if (null !== $this->databases && \is_array($this->databases)) {
                $n = 0;
                foreach ($this->databases as $item) {
                    $res['Databases'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->databasesBlack) {
            $res['DatabasesBlack'] = [];
            if (null !== $this->databasesBlack && \is_array($this->databasesBlack)) {
                $n = 0;
                foreach ($this->databasesBlack as $item) {
                    $res['DatabasesBlack'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->tableAndViewBlackList) {
            $res['TableAndViewBlackList'] = $this->tableAndViewBlackList;
        }
        if (null !== $this->tableAndViewWhiteList) {
            $res['TableAndViewWhiteList'] = $this->tableAndViewWhiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transferMapping
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = [];
                $n                = 0;
                foreach ($map['Databases'] as $item) {
                    $model->databases[$n++] = null !== $item ? databases::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DatabasesBlack'])) {
            if (!empty($map['DatabasesBlack'])) {
                $model->databasesBlack = [];
                $n                     = 0;
                foreach ($map['DatabasesBlack'] as $item) {
                    $model->databasesBlack[$n++] = null !== $item ? databasesBlack::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['TableAndViewBlackList'])) {
            if (!empty($map['TableAndViewBlackList'])) {
                $model->tableAndViewBlackList = $map['TableAndViewBlackList'];
            }
        }
        if (isset($map['TableAndViewWhiteList'])) {
            if (!empty($map['TableAndViewWhiteList'])) {
                $model->tableAndViewWhiteList = $map['TableAndViewWhiteList'];
            }
        }

        return $model;
    }
}
