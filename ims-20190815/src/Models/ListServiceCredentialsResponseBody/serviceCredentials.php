<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListServiceCredentialsResponseBody;

use AlibabaCloud\Dara\Model;

class serviceCredentials extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $expirationTime;

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
    public $serviceName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'expirationTime' => 'ExpirationTime',
        'serviceCredentialId' => 'ServiceCredentialId',
        'serviceCredentialName' => 'ServiceCredentialName',
        'serviceName' => 'ServiceName',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }

        if (null !== $this->serviceCredentialId) {
            $res['ServiceCredentialId'] = $this->serviceCredentialId;
        }

        if (null !== $this->serviceCredentialName) {
            $res['ServiceCredentialName'] = $this->serviceCredentialName;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }

        if (isset($map['ServiceCredentialId'])) {
            $model->serviceCredentialId = $map['ServiceCredentialId'];
        }

        if (isset($map['ServiceCredentialName'])) {
            $model->serviceCredentialName = $map['ServiceCredentialName'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
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
