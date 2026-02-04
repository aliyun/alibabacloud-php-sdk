<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CheckApplicationProvisioningUserPrimaryOrganizationalUnitResponseBody\checkApplicationProvisioningUserPrimaryOuResult;

class CheckApplicationProvisioningUserPrimaryOrganizationalUnitResponseBody extends Model
{
    /**
     * @var checkApplicationProvisioningUserPrimaryOuResult
     */
    public $checkApplicationProvisioningUserPrimaryOuResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkApplicationProvisioningUserPrimaryOuResult' => 'CheckApplicationProvisioningUserPrimaryOuResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->checkApplicationProvisioningUserPrimaryOuResult) {
            $this->checkApplicationProvisioningUserPrimaryOuResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkApplicationProvisioningUserPrimaryOuResult) {
            $res['CheckApplicationProvisioningUserPrimaryOuResult'] = null !== $this->checkApplicationProvisioningUserPrimaryOuResult ? $this->checkApplicationProvisioningUserPrimaryOuResult->toArray($noStream) : $this->checkApplicationProvisioningUserPrimaryOuResult;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CheckApplicationProvisioningUserPrimaryOuResult'])) {
            $model->checkApplicationProvisioningUserPrimaryOuResult = checkApplicationProvisioningUserPrimaryOuResult::fromMap($map['CheckApplicationProvisioningUserPrimaryOuResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
