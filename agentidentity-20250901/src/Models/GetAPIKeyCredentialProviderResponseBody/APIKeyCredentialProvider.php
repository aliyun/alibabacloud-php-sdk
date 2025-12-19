<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetAPIKeyCredentialProviderResponseBody;

use AlibabaCloud\Dara\Model;

class APIKeyCredentialProvider extends Model
{
    /**
     * @var string
     */
    public $APIKeyCredentialProviderName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $credentialProviderArn;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'APIKeyCredentialProviderName' => 'APIKeyCredentialProviderName',
        'createTime' => 'CreateTime',
        'credentialProviderArn' => 'CredentialProviderArn',
        'description' => 'Description',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->APIKeyCredentialProviderName) {
            $res['APIKeyCredentialProviderName'] = $this->APIKeyCredentialProviderName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->credentialProviderArn) {
            $res['CredentialProviderArn'] = $this->credentialProviderArn;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['APIKeyCredentialProviderName'])) {
            $model->APIKeyCredentialProviderName = $map['APIKeyCredentialProviderName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CredentialProviderArn'])) {
            $model->credentialProviderArn = $map['CredentialProviderArn'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
