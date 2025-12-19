<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class GetAPIKeyCredentialProviderRequest extends Model
{
    /**
     * @var string
     */
    public $APIKeyCredentialProviderName;
    protected $_name = [
        'APIKeyCredentialProviderName' => 'APIKeyCredentialProviderName',
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

        return $model;
    }
}
