<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders\applyOrder\approveContent;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders\applyOrder\approveContent\projectMeta\objectMetaList;
use AlibabaCloud\Tea\Model;

class projectMeta extends Model
{
    /**
     * @description The information about the object on which you requested permissions.
     *
     * @var objectMetaList[]
     */
    public $objectMetaList;

    /**
     * @description The name of the DataWorks workspace that was associated with the MaxCompute project in which you requested permissions on a table.
     *
     * @example aWorkspaceName
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'objectMetaList' => 'ObjectMetaList',
        'workspaceName'  => 'WorkspaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectMetaList) {
            $res['ObjectMetaList'] = [];
            if (null !== $this->objectMetaList && \is_array($this->objectMetaList)) {
                $n = 0;
                foreach ($this->objectMetaList as $item) {
                    $res['ObjectMetaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ObjectMetaList'])) {
            if (!empty($map['ObjectMetaList'])) {
                $model->objectMetaList = [];
                $n                     = 0;
                foreach ($map['ObjectMetaList'] as $item) {
                    $model->objectMetaList[$n++] = null !== $item ? objectMetaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
