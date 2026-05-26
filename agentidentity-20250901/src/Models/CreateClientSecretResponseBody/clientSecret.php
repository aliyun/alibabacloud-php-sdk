<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\CreateClientSecretResponseBody;

use AlibabaCloud\Dara\Model;

class clientSecret extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientName;

    /**
     * @var string
     */
    public $clientSecretId;

    /**
     * @var string
     */
    public $clientSecretValue;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $userPoolName;
    protected $_name = [
        'clientId' => 'ClientId',
        'clientName' => 'ClientName',
        'clientSecretId' => 'ClientSecretId',
        'clientSecretValue' => 'ClientSecretValue',
        'createTime' => 'CreateTime',
        'userPoolName' => 'UserPoolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->clientName) {
            $res['ClientName'] = $this->clientName;
        }

        if (null !== $this->clientSecretId) {
            $res['ClientSecretId'] = $this->clientSecretId;
        }

        if (null !== $this->clientSecretValue) {
            $res['ClientSecretValue'] = $this->clientSecretValue;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->userPoolName) {
            $res['UserPoolName'] = $this->userPoolName;
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
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['ClientName'])) {
            $model->clientName = $map['ClientName'];
        }

        if (isset($map['ClientSecretId'])) {
            $model->clientSecretId = $map['ClientSecretId'];
        }

        if (isset($map['ClientSecretValue'])) {
            $model->clientSecretValue = $map['ClientSecretValue'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['UserPoolName'])) {
            $model->userPoolName = $map['UserPoolName'];
        }

        return $model;
    }
}
