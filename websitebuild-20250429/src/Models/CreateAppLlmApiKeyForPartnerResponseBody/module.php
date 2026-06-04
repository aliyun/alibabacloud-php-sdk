<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\CreateAppLlmApiKeyForPartnerResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $encryptedApiKey;
    protected $_name = [
        'encryptedApiKey' => 'EncryptedApiKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryptedApiKey) {
            $res['EncryptedApiKey'] = $this->encryptedApiKey;
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
        if (isset($map['EncryptedApiKey'])) {
            $model->encryptedApiKey = $map['EncryptedApiKey'];
        }

        return $model;
    }
}
