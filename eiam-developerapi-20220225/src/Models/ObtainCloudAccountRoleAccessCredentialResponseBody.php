<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ObtainCloudAccountRoleAccessCredentialResponseBody\cloudAccountRoleAccessCredential;

class ObtainCloudAccountRoleAccessCredentialResponseBody extends Model
{
    /**
     * @var string
     */
    public $cloudAccountId;

    /**
     * @var cloudAccountRoleAccessCredential
     */
    public $cloudAccountRoleAccessCredential;

    /**
     * @var string
     */
    public $cloudAccountRoleExternalId;

    /**
     * @var string
     */
    public $cloudAccountRoleId;

    /**
     * @var string
     */
    public $cloudAccountRoleName;

    /**
     * @var string
     */
    public $cloudAccountVendorType;
    protected $_name = [
        'cloudAccountId' => 'cloudAccountId',
        'cloudAccountRoleAccessCredential' => 'cloudAccountRoleAccessCredential',
        'cloudAccountRoleExternalId' => 'cloudAccountRoleExternalId',
        'cloudAccountRoleId' => 'cloudAccountRoleId',
        'cloudAccountRoleName' => 'cloudAccountRoleName',
        'cloudAccountVendorType' => 'cloudAccountVendorType',
    ];

    public function validate()
    {
        if (null !== $this->cloudAccountRoleAccessCredential) {
            $this->cloudAccountRoleAccessCredential->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAccountId) {
            $res['cloudAccountId'] = $this->cloudAccountId;
        }

        if (null !== $this->cloudAccountRoleAccessCredential) {
            $res['cloudAccountRoleAccessCredential'] = null !== $this->cloudAccountRoleAccessCredential ? $this->cloudAccountRoleAccessCredential->toArray($noStream) : $this->cloudAccountRoleAccessCredential;
        }

        if (null !== $this->cloudAccountRoleExternalId) {
            $res['cloudAccountRoleExternalId'] = $this->cloudAccountRoleExternalId;
        }

        if (null !== $this->cloudAccountRoleId) {
            $res['cloudAccountRoleId'] = $this->cloudAccountRoleId;
        }

        if (null !== $this->cloudAccountRoleName) {
            $res['cloudAccountRoleName'] = $this->cloudAccountRoleName;
        }

        if (null !== $this->cloudAccountVendorType) {
            $res['cloudAccountVendorType'] = $this->cloudAccountVendorType;
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
        if (isset($map['cloudAccountId'])) {
            $model->cloudAccountId = $map['cloudAccountId'];
        }

        if (isset($map['cloudAccountRoleAccessCredential'])) {
            $model->cloudAccountRoleAccessCredential = cloudAccountRoleAccessCredential::fromMap($map['cloudAccountRoleAccessCredential']);
        }

        if (isset($map['cloudAccountRoleExternalId'])) {
            $model->cloudAccountRoleExternalId = $map['cloudAccountRoleExternalId'];
        }

        if (isset($map['cloudAccountRoleId'])) {
            $model->cloudAccountRoleId = $map['cloudAccountRoleId'];
        }

        if (isset($map['cloudAccountRoleName'])) {
            $model->cloudAccountRoleName = $map['cloudAccountRoleName'];
        }

        if (isset($map['cloudAccountVendorType'])) {
            $model->cloudAccountVendorType = $map['cloudAccountVendorType'];
        }

        return $model;
    }
}
