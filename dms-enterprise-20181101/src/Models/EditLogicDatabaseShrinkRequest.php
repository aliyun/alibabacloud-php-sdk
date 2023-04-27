<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class EditLogicDatabaseShrinkRequest extends Model
{
    /**
     * @example test_logic_db
     *
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $databaseIdsShrink;

    /**
     * @example 1***
     *
     * @var int
     */
    public $logicDbId;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'alias'             => 'Alias',
        'databaseIdsShrink' => 'DatabaseIds',
        'logicDbId'         => 'LogicDbId',
        'tid'               => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->databaseIdsShrink) {
            $res['DatabaseIds'] = $this->databaseIdsShrink;
        }
        if (null !== $this->logicDbId) {
            $res['LogicDbId'] = $this->logicDbId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditLogicDatabaseShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['DatabaseIds'])) {
            $model->databaseIdsShrink = $map['DatabaseIds'];
        }
        if (isset($map['LogicDbId'])) {
            $model->logicDbId = $map['LogicDbId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
