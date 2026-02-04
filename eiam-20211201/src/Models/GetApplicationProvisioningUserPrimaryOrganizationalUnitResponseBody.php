<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class GetApplicationProvisioningUserPrimaryOrganizationalUnitResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $userPrimaryOrganizationalUnitId;
    protected $_name = [
        'requestId' => 'RequestId',
        'userPrimaryOrganizationalUnitId' => 'UserPrimaryOrganizationalUnitId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userPrimaryOrganizationalUnitId) {
            $res['UserPrimaryOrganizationalUnitId'] = $this->userPrimaryOrganizationalUnitId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserPrimaryOrganizationalUnitId'])) {
            $model->userPrimaryOrganizationalUnitId = $map['UserPrimaryOrganizationalUnitId'];
        }

        return $model;
    }
}
