<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class RegisterDelegatedAdministratorRequest extends Model
{
    /**
     * @description The Alibaba Cloud account ID of the member in the resource directory.
     *
     * @example 181761095690****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The identifier of the trusted service.
     *
     * For more information, see the `Trusted service identifier` column in [Supported trusted services](~~208133~~).
     * @example cloudfw.aliyuncs.com
     *
     * @var string
     */
    public $servicePrincipal;
    protected $_name = [
        'accountId'        => 'AccountId',
        'servicePrincipal' => 'ServicePrincipal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->servicePrincipal) {
            $res['ServicePrincipal'] = $this->servicePrincipal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterDelegatedAdministratorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ServicePrincipal'])) {
            $model->servicePrincipal = $map['ServicePrincipal'];
        }

        return $model;
    }
}
