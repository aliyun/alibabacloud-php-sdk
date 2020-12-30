<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceConnectionRequest extends Model
{
    /**
     * @var string
     */
    public $serviceConnectionType;

    /**
     * @var string
     */
    public $userPk;

    /**
     * @var string
     */
    public $orgId;
    protected $_name = [
        'serviceConnectionType' => 'ServiceConnectionType',
        'userPk'                => 'UserPk',
        'orgId'                 => 'OrgId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceConnectionType) {
            $res['ServiceConnectionType'] = $this->serviceConnectionType;
        }
        if (null !== $this->userPk) {
            $res['UserPk'] = $this->userPk;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceConnectionType'])) {
            $model->serviceConnectionType = $map['ServiceConnectionType'];
        }
        if (isset($map['UserPk'])) {
            $model->userPk = $map['UserPk'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        return $model;
    }
}
