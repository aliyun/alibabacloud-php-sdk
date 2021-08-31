<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20210616\Models\QueryAllResourcesWithPermissionsResponseBody\data;

use AlibabaCloud\SDK\Linkedmall\V20210616\Models\QueryAllResourcesWithPermissionsResponseBody\data\permissionOfResourceList\permissionItemList;
use AlibabaCloud\Tea\Model;

class permissionOfResourceList extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $permissionId;

    /**
     * @var permissionItemList[]
     */
    public $permissionItemList;
    protected $_name = [
        'code'               => 'Code',
        'name'               => 'Name',
        'description'        => 'Description',
        'permissionId'       => 'PermissionId',
        'permissionItemList' => 'PermissionItemList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->permissionId) {
            $res['PermissionId'] = $this->permissionId;
        }
        if (null !== $this->permissionItemList) {
            $res['PermissionItemList'] = [];
            if (null !== $this->permissionItemList && \is_array($this->permissionItemList)) {
                $n = 0;
                foreach ($this->permissionItemList as $item) {
                    $res['PermissionItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissionOfResourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PermissionId'])) {
            $model->permissionId = $map['PermissionId'];
        }
        if (isset($map['PermissionItemList'])) {
            if (!empty($map['PermissionItemList'])) {
                $model->permissionItemList = [];
                $n                         = 0;
                foreach ($map['PermissionItemList'] as $item) {
                    $model->permissionItemList[$n++] = null !== $item ? permissionItemList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
