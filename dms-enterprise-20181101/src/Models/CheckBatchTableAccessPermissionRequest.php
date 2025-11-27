<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class CheckBatchTableAccessPermissionRequest extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var string
     */
    public $permissionType;

    /**
     * @var string[]
     */
    public $tableNameList;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'dbId' => 'DbId',
        'logic' => 'Logic',
        'permissionType' => 'PermissionType',
        'tableNameList' => 'TableNameList',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        if (\is_array($this->tableNameList)) {
            Model::validateArray($this->tableNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }

        if (null !== $this->permissionType) {
            $res['PermissionType'] = $this->permissionType;
        }

        if (null !== $this->tableNameList) {
            if (\is_array($this->tableNameList)) {
                $res['TableNameList'] = [];
                $n1 = 0;
                foreach ($this->tableNameList as $item1) {
                    $res['TableNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }

        if (isset($map['PermissionType'])) {
            $model->permissionType = $map['PermissionType'];
        }

        if (isset($map['TableNameList'])) {
            if (!empty($map['TableNameList'])) {
                $model->tableNameList = [];
                $n1 = 0;
                foreach ($map['TableNameList'] as $item1) {
                    $model->tableNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
