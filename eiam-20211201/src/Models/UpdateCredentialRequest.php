<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCredentialRequest\credentialContent;

class UpdateCredentialRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var credentialContent
     */
    public $credentialContent;

    /**
     * @var string
     */
    public $credentialId;

    /**
     * @var string
     */
    public $credentialName;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'credentialContent' => 'CredentialContent',
        'credentialId' => 'CredentialId',
        'credentialName' => 'CredentialName',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (null !== $this->credentialContent) {
            $this->credentialContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->credentialContent) {
            $res['CredentialContent'] = null !== $this->credentialContent ? $this->credentialContent->toArray($noStream) : $this->credentialContent;
        }

        if (null !== $this->credentialId) {
            $res['CredentialId'] = $this->credentialId;
        }

        if (null !== $this->credentialName) {
            $res['CredentialName'] = $this->credentialName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CredentialContent'])) {
            $model->credentialContent = credentialContent::fromMap($map['CredentialContent']);
        }

        if (isset($map['CredentialId'])) {
            $model->credentialId = $map['CredentialId'];
        }

        if (isset($map['CredentialName'])) {
            $model->credentialName = $map['CredentialName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
