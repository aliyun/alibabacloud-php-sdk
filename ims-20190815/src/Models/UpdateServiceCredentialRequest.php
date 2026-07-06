<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;

class UpdateServiceCredentialRequest extends Model
{
    /**
     * @var string
     */
    public $serviceCredentialId;

    /**
     * @var string
     */
    public $serviceCredentialName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'serviceCredentialId' => 'ServiceCredentialId',
        'serviceCredentialName' => 'ServiceCredentialName',
        'status' => 'Status',
        'userPrincipalName' => 'UserPrincipalName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceCredentialId) {
            $res['ServiceCredentialId'] = $this->serviceCredentialId;
        }

        if (null !== $this->serviceCredentialName) {
            $res['ServiceCredentialName'] = $this->serviceCredentialName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
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
        if (isset($map['ServiceCredentialId'])) {
            $model->serviceCredentialId = $map['ServiceCredentialId'];
        }

        if (isset($map['ServiceCredentialName'])) {
            $model->serviceCredentialName = $map['ServiceCredentialName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
