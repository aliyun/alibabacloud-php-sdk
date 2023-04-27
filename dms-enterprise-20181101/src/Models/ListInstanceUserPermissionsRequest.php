<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceUserPermissionsRequest extends Model
{
    /**
     * @description The user who grants the permissions.
     *
     * @example 174****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the instance.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The time when the permissions expire.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The nickname of the user. You can call the [ListUsers](~~141938~~) or [GetUser](~~147098~~) operation to query the nickname of the user.
     *
     * >  The value of the NickName parameter is that of the UserName parameter.
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The error code.
     *
     * @example test_nick_name
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'tid'        => 'Tid',
        'userName'   => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceUserPermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
