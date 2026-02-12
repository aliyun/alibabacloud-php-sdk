<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ObtainCredentialResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ObtainCredentialResponseBody\credentialContent\apiKeyContent;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ObtainCredentialResponseBody\credentialContent\oauthClientContent;

class credentialContent extends Model
{
    /**
     * @var apiKeyContent
     */
    public $apiKeyContent;

    /**
     * @var oauthClientContent
     */
    public $oauthClientContent;
    protected $_name = [
        'apiKeyContent' => 'apiKeyContent',
        'oauthClientContent' => 'oauthClientContent',
    ];

    public function validate()
    {
        if (null !== $this->apiKeyContent) {
            $this->apiKeyContent->validate();
        }
        if (null !== $this->oauthClientContent) {
            $this->oauthClientContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyContent) {
            $res['apiKeyContent'] = null !== $this->apiKeyContent ? $this->apiKeyContent->toArray($noStream) : $this->apiKeyContent;
        }

        if (null !== $this->oauthClientContent) {
            $res['oauthClientContent'] = null !== $this->oauthClientContent ? $this->oauthClientContent->toArray($noStream) : $this->oauthClientContent;
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
        if (isset($map['apiKeyContent'])) {
            $model->apiKeyContent = apiKeyContent::fromMap($map['apiKeyContent']);
        }

        if (isset($map['oauthClientContent'])) {
            $model->oauthClientContent = oauthClientContent::fromMap($map['oauthClientContent']);
        }

        return $model;
    }
}
