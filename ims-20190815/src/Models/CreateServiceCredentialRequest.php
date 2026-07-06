<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;

class CreateServiceCredentialRequest extends Model
{
    /**
     * @var int
     */
    public $credentialAgeDays;

    /**
     * @var string
     */
    public $serviceCredentialName;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'credentialAgeDays' => 'CredentialAgeDays',
        'serviceCredentialName' => 'ServiceCredentialName',
        'serviceName' => 'ServiceName',
        'userPrincipalName' => 'UserPrincipalName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialAgeDays) {
            $res['CredentialAgeDays'] = $this->credentialAgeDays;
        }

        if (null !== $this->serviceCredentialName) {
            $res['ServiceCredentialName'] = $this->serviceCredentialName;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['CredentialAgeDays'])) {
            $model->credentialAgeDays = $map['CredentialAgeDays'];
        }

        if (isset($map['ServiceCredentialName'])) {
            $model->serviceCredentialName = $map['ServiceCredentialName'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
