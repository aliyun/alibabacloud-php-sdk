<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPermissionListResponseBody\data;

use AlibabaCloud\Tea\Model;

class permissionList extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $permissionCode;

    /**
     * @var string
     */
    public $permissionName;
    protected $_name = [
        'endTime'        => 'EndTime',
        'startTime'      => 'StartTime',
        'permissionCode' => 'PermissionCode',
        'permissionName' => 'PermissionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->permissionCode) {
            $res['PermissionCode'] = $this->permissionCode;
        }
        if (null !== $this->permissionName) {
            $res['PermissionName'] = $this->permissionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['PermissionCode'])) {
            $model->permissionCode = $map['PermissionCode'];
        }
        if (isset($map['PermissionName'])) {
            $model->permissionName = $map['PermissionName'];
        }

        return $model;
    }
}
