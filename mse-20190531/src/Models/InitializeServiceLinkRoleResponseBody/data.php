<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\InitializeServiceLinkRoleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ram:CreateServiceLinkedRole
     *
     * @var string
     */
    public $requiredPermission;

    /**
     * @example AliyunServiceRoleForMSE
     *
     * @var string
     */
    public $roleName;

    /**
     * @example mse.aliyuncs.com
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'requiredPermission' => 'RequiredPermission',
        'roleName' => 'RoleName',
        'serviceName' => 'ServiceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requiredPermission) {
            $res['RequiredPermission'] = $this->requiredPermission;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequiredPermission'])) {
            $model->requiredPermission = $map['RequiredPermission'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
