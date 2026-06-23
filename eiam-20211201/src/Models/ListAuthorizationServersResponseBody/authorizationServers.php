<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListAuthorizationServersResponseBody;

use AlibabaCloud\Dara\Model;

class authorizationServers extends Model
{
    /**
     * @var string
     */
    public $authorizationServerId;

    /**
     * @var string
     */
    public $authorizationServerName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creationType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $issuerDomain;

    /**
     * @var string
     */
    public $issuerMode;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'authorizationServerId' => 'AuthorizationServerId',
        'authorizationServerName' => 'AuthorizationServerName',
        'createTime' => 'CreateTime',
        'creationType' => 'CreationType',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'issuer' => 'Issuer',
        'issuerDomain' => 'IssuerDomain',
        'issuerMode' => 'IssuerMode',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationServerId) {
            $res['AuthorizationServerId'] = $this->authorizationServerId;
        }

        if (null !== $this->authorizationServerName) {
            $res['AuthorizationServerName'] = $this->authorizationServerName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creationType) {
            $res['CreationType'] = $this->creationType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->issuerDomain) {
            $res['IssuerDomain'] = $this->issuerDomain;
        }

        if (null !== $this->issuerMode) {
            $res['IssuerMode'] = $this->issuerMode;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AuthorizationServerId'])) {
            $model->authorizationServerId = $map['AuthorizationServerId'];
        }

        if (isset($map['AuthorizationServerName'])) {
            $model->authorizationServerName = $map['AuthorizationServerName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreationType'])) {
            $model->creationType = $map['CreationType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['IssuerDomain'])) {
            $model->issuerDomain = $map['IssuerDomain'];
        }

        if (isset($map['IssuerMode'])) {
            $model->issuerMode = $map['IssuerMode'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
