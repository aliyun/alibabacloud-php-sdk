<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceMyApiPermissionsResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceMyApiPermissionsResponseBody\pageResult\permissionList;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @var permissionList[]
     */
    public $permissionList;

    /**
     * @example 68
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'permissionList' => 'PermissionList',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissionList) {
            $res['PermissionList'] = [];
            if (null !== $this->permissionList && \is_array($this->permissionList)) {
                $n = 0;
                foreach ($this->permissionList as $item) {
                    $res['PermissionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PermissionList'])) {
            if (!empty($map['PermissionList'])) {
                $model->permissionList = [];
                $n = 0;
                foreach ($map['PermissionList'] as $item) {
                    $model->permissionList[$n++] = null !== $item ? permissionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
