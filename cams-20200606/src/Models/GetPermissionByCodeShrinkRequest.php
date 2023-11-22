<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class GetPermissionByCodeShrinkRequest extends Model
{
    /**
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
     * @var string
     */
    public $permissionsShrink;
    protected $_name = [
        'code'              => 'Code',
        'custSpaceId'       => 'CustSpaceId',
        'permissionsShrink' => 'Permissions',
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
        if (null !== $this->permissionsShrink) {
            $res['Permissions'] = $this->permissionsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPermissionByCodeShrinkRequest
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
            $model->permissionsShrink = $map['Permissions'];
        }

        return $model;
    }
}
