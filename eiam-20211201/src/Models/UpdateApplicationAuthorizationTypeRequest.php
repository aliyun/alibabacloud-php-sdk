<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class UpdateApplicationAuthorizationTypeRequest extends Model
{
    /**
     * @description The ID of the application that you want to modify.
     *
     * This parameter is required.
     *
     * @example app_mkv7rgt4d7i4u7zqtzev2mxxxx
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The authorization type of the application. Valid values:
     *
     *   authorize_required: Only the user with explicit authorization can access the application.
     *   default_all: By default, all users can access the application.
     *
     * This parameter is required.
     *
     * @example authorize_required
     *
     * @var string
     */
    public $authorizationType;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'authorizationType' => 'AuthorizationType',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->authorizationType) {
            $res['AuthorizationType'] = $this->authorizationType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplicationAuthorizationTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['AuthorizationType'])) {
            $model->authorizationType = $map['AuthorizationType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
