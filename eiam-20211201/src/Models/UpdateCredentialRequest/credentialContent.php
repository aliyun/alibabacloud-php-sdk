<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCredentialRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCredentialRequest\credentialContent\apiKeyContent;
use AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateCredentialRequest\credentialContent\OAuthClientContent;

class credentialContent extends Model
{
    /**
     * @var apiKeyContent
     */
    public $apiKeyContent;

    /**
     * @var OAuthClientContent
     */
    public $OAuthClientContent;
    protected $_name = [
        'apiKeyContent' => 'ApiKeyContent',
        'OAuthClientContent' => 'OAuthClientContent',
    ];

    public function validate()
    {
        if (null !== $this->apiKeyContent) {
            $this->apiKeyContent->validate();
        }
        if (null !== $this->OAuthClientContent) {
            $this->OAuthClientContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyContent) {
            $res['ApiKeyContent'] = null !== $this->apiKeyContent ? $this->apiKeyContent->toArray($noStream) : $this->apiKeyContent;
        }

        if (null !== $this->OAuthClientContent) {
            $res['OAuthClientContent'] = null !== $this->OAuthClientContent ? $this->OAuthClientContent->toArray($noStream) : $this->OAuthClientContent;
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
        if (isset($map['ApiKeyContent'])) {
            $model->apiKeyContent = apiKeyContent::fromMap($map['ApiKeyContent']);
        }

        if (isset($map['OAuthClientContent'])) {
            $model->OAuthClientContent = OAuthClientContent::fromMap($map['OAuthClientContent']);
        }

        return $model;
    }
}
