<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\FetchOAuthAuthenticationTokenResponseBody;

use AlibabaCloud\Dara\Model;

class oauthAuthorizationSession extends Model
{
    /**
     * @var string
     */
    public $authorizationUrl;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $sessionStatus;

    /**
     * @var string
     */
    public $sessionUri;
    protected $_name = [
        'authorizationUrl' => 'authorizationUrl',
        'sessionId' => 'sessionId',
        'sessionStatus' => 'sessionStatus',
        'sessionUri' => 'sessionUri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationUrl) {
            $res['authorizationUrl'] = $this->authorizationUrl;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->sessionStatus) {
            $res['sessionStatus'] = $this->sessionStatus;
        }

        if (null !== $this->sessionUri) {
            $res['sessionUri'] = $this->sessionUri;
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
        if (isset($map['authorizationUrl'])) {
            $model->authorizationUrl = $map['authorizationUrl'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['sessionStatus'])) {
            $model->sessionStatus = $map['sessionStatus'];
        }

        if (isset($map['sessionUri'])) {
            $model->sessionUri = $map['sessionUri'];
        }

        return $model;
    }
}
