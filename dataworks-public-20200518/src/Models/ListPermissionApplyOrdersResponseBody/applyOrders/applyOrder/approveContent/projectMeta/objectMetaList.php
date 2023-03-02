<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders\applyOrder\approveContent\projectMeta;

use AlibabaCloud\Tea\Model;

class objectMetaList extends Model
{
    /**
     * @description The permission that you wanted to request. If you wanted to request multiple permissions at the same time, separate them with commas (,).
     *
     * You can request only the following permissions: Select, Describe, Drop, Alter, Update, and Download.
     * @var string[]
     */
    public $actions;

    /**
     * @description The name of the table on which you requested permissions.
     *
     * @example aTableName
     *
     * @var string
     */
    public $objectName;
    protected $_name = [
        'actions'    => 'Actions',
        'objectName' => 'ObjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['Actions'] = $this->actions;
        }
        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return objectMetaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Actions'])) {
            if (!empty($map['Actions'])) {
                $model->actions = $map['Actions'];
            }
        }
        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }

        return $model;
    }
}
