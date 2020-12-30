<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesResponseBody\logicTableList\logicTable;

use AlibabaCloud\Tea\Model;

class ownerIdList extends Model
{
    /**
     * @var string[]
     */
    public $ownerIds;
    protected $_name = [
        'ownerIds' => 'OwnerIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerIds) {
            $res['OwnerIds'] = $this->ownerIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ownerIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerIds'])) {
            if (!empty($map['OwnerIds'])) {
                $model->ownerIds = $map['OwnerIds'];
            }
        }

        return $model;
    }
}
