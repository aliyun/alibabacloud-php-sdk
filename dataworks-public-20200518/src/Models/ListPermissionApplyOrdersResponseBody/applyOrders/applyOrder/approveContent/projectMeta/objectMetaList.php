<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders\applyOrder\approveContent\projectMeta;

use AlibabaCloud\Tea\Model;

class objectMetaList extends Model
{
    /**
     * @var string
     */
    public $objectName;

    /**
     * @var string[]
     */
    public $actions;
    protected $_name = [
        'objectName' => 'ObjectName',
        'actions'    => 'Actions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }
        if (null !== $this->actions) {
            $res['Actions'] = $this->actions;
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
        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }
        if (isset($map['Actions'])) {
            if (!empty($map['Actions'])) {
                $model->actions = $map['Actions'];
            }
        }

        return $model;
    }
}
