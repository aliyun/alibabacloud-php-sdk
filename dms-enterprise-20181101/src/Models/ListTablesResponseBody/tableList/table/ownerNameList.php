<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesResponseBody\tableList\table;

use AlibabaCloud\Tea\Model;

class ownerNameList extends Model
{
    /**
     * @var string[]
     */
    public $ownerNames;
    protected $_name = [
        'ownerNames' => 'OwnerNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerNames) {
            $res['OwnerNames'] = $this->ownerNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ownerNameList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerNames'])) {
            if (!empty($map['OwnerNames'])) {
                $model->ownerNames = $map['OwnerNames'];
            }
        }

        return $model;
    }
}
