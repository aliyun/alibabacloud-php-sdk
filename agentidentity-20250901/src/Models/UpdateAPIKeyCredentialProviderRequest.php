<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class UpdateAPIKeyCredentialProviderRequest extends Model
{
    /**
     * @var string
     */
    public $APIKey;

    /**
     * @var string
     */
    public $APIKeyCredentialProviderName;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'APIKey' => 'APIKey',
        'APIKeyCredentialProviderName' => 'APIKeyCredentialProviderName',
        'description' => 'Description',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->APIKey) {
            $res['APIKey'] = $this->APIKey;
        }

        if (null !== $this->APIKeyCredentialProviderName) {
            $res['APIKeyCredentialProviderName'] = $this->APIKeyCredentialProviderName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['APIKey'])) {
            $model->APIKey = $map['APIKey'];
        }

        if (isset($map['APIKeyCredentialProviderName'])) {
            $model->APIKeyCredentialProviderName = $map['APIKeyCredentialProviderName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
