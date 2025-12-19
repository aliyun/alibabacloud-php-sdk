<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class DeleteOAuth2CredentialProviderRequest extends Model
{
    /**
     * @var string
     */
    public $OAuth2CredentialProviderName;
    protected $_name = [
        'OAuth2CredentialProviderName' => 'OAuth2CredentialProviderName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->OAuth2CredentialProviderName) {
            $res['OAuth2CredentialProviderName'] = $this->OAuth2CredentialProviderName;
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
        if (isset($map['OAuth2CredentialProviderName'])) {
            $model->OAuth2CredentialProviderName = $map['OAuth2CredentialProviderName'];
        }

        return $model;
    }
}
