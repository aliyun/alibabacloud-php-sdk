<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceMyApiPermissionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceMyApiPermissionsResponseBody\pageResult\permissionList;

class pageResult extends Model
{
    /**
     * @var permissionList[]
     */
    public $permissionList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'permissionList' => 'PermissionList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->permissionList)) {
            Model::validateArray($this->permissionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permissionList) {
            if (\is_array($this->permissionList)) {
                $res['PermissionList'] = [];
                $n1 = 0;
                foreach ($this->permissionList as $item1) {
                    $res['PermissionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PermissionList'])) {
            if (!empty($map['PermissionList'])) {
                $model->permissionList = [];
                $n1 = 0;
                foreach ($map['PermissionList'] as $item1) {
                    $model->permissionList[$n1] = permissionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
