<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserExclusiveCredentialRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\CreateUserExclusiveCredentialRequest\credentialContent\apiKeyContent;

class credentialContent extends Model
{
    /**
     * @var apiKeyContent
     */
    public $apiKeyContent;
    protected $_name = [
        'apiKeyContent' => 'apiKeyContent',
    ];

    public function validate()
    {
        if (null !== $this->apiKeyContent) {
            $this->apiKeyContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyContent) {
            $res['apiKeyContent'] = null !== $this->apiKeyContent ? $this->apiKeyContent->toArray($noStream) : $this->apiKeyContent;
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

        return $model;
    }
}
