<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicDatabasesResponseBody\logicDatabaseList\logicDatabase;

use AlibabaCloud\Tea\Model;

class databaseIds extends Model
{
    /**
     * @var int[]
     */
    public $databaseIds;
    protected $_name = [
        'databaseIds' => 'DatabaseIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseIds) {
            $res['DatabaseIds'] = $this->databaseIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return databaseIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseIds'])) {
            if (!empty($map['DatabaseIds'])) {
                $model->databaseIds = $map['DatabaseIds'];
            }
        }

        return $model;
    }
}
