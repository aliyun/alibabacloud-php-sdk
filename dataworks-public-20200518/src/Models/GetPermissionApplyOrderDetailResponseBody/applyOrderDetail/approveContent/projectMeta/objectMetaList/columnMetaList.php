<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail\approveContent\projectMeta\objectMetaList;

use AlibabaCloud\Tea\Model;

class columnMetaList extends Model
{
    /**
     * @description The description of the column on which you request permissions.
     *
     * @var string
     */
    public $columnComment;

    /**
     * @description The name of the column on which you request permissions.
     *
     * @example aColumnName
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The security level of the column on which you request permissions. Valid values: 0 to 9.
     *
     * @example 9
     *
     * @var string
     */
    public $securityLevel;
    protected $_name = [
        'columnComment' => 'ColumnComment',
        'columnName'    => 'ColumnName',
        'securityLevel' => 'SecurityLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnComment) {
            $res['ColumnComment'] = $this->columnComment;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->securityLevel) {
            $res['SecurityLevel'] = $this->securityLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columnMetaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnComment'])) {
            $model->columnComment = $map['ColumnComment'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['SecurityLevel'])) {
            $model->securityLevel = $map['SecurityLevel'];
        }

        return $model;
    }
}
