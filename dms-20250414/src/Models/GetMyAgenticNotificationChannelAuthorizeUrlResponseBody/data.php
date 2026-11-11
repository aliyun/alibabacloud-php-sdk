<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\GetMyAgenticNotificationChannelAuthorizeUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authorizeUrl;

    /**
     * @var string
     */
    public $redirectUri;
    protected $_name = [
        'authorizeUrl' => 'AuthorizeUrl',
        'redirectUri' => 'RedirectUri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizeUrl) {
            $res['AuthorizeUrl'] = $this->authorizeUrl;
        }

        if (null !== $this->redirectUri) {
            $res['RedirectUri'] = $this->redirectUri;
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
        if (isset($map['AuthorizeUrl'])) {
            $model->authorizeUrl = $map['AuthorizeUrl'];
        }

        if (isset($map['RedirectUri'])) {
            $model->redirectUri = $map['RedirectUri'];
        }

        return $model;
    }
}
