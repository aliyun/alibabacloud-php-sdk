<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class GetPermissionByCodeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example flow_001
     *
     * @var string
     */
    public $code;

    /**
     * @example 393847477
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @var string[]
     */
    public $permissions;
    protected $_name = [
        'code'        => 'Code',
        'custSpaceId' => 'CustSpaceId',
        'permissions' => 'Permissions',
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
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->permissions) {
            $res['Permissions'] = $this->permissions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPermissionByCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['Permissions'])) {
            if (!empty($map['Permissions'])) {
                $model->permissions = $map['Permissions'];
            }
        }

        return $model;
    }
}
