<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\InitializeServiceLinkRoleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $requiredPermission;
    /**
     * @var string
     */
    public $roleName;
    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'requiredPermission' => 'RequiredPermission',
        'roleName'           => 'RoleName',
        'serviceName'        => 'ServiceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
