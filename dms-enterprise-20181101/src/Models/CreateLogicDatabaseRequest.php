<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateLogicDatabaseRequest extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var int[]
     */
    public $databaseIds;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'alias'       => 'Alias',
        'databaseIds' => 'DatabaseIds',
        'tid'         => 'Tid',
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
        if (null !== $this->databaseIds) {
            $res['DatabaseIds'] = $this->databaseIds;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLogicDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['DatabaseIds'])) {
            if (!empty($map['DatabaseIds'])) {
                $model->databaseIds = $map['DatabaseIds'];
            }
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
