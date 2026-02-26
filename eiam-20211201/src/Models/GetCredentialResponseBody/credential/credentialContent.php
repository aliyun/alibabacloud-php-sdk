<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetCredentialResponseBody\credential;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCredentialResponseBody\credential\credentialContent\OAuthClientContent;

class credentialContent extends Model
{
    /**
     * @var OAuthClientContent
     */
    public $OAuthClientContent;
    protected $_name = [
        'OAuthClientContent' => 'OAuthClientContent',
    ];

    public function validate()
    {
        if (null !== $this->OAuthClientContent) {
            $this->OAuthClientContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['OAuthClientContent'])) {
            $model->OAuthClientContent = OAuthClientContent::fromMap($map['OAuthClientContent']);
        }

        return $model;
    }
}
