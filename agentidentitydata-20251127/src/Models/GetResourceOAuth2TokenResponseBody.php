<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentityData\V20251127\Models;

use AlibabaCloud\Dara\Model;

class GetResourceOAuth2TokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $authorizationURL;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sessionStatus;

    /**
     * @var string
     */
    public $sessionURI;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'authorizationURL' => 'AuthorizationURL',
        'requestId' => 'RequestId',
        'sessionStatus' => 'SessionStatus',
        'sessionURI' => 'SessionURI',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }

        if (null !== $this->authorizationURL) {
            $res['AuthorizationURL'] = $this->authorizationURL;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
        }

        if (null !== $this->sessionURI) {
            $res['SessionURI'] = $this->sessionURI;
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
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }

        if (isset($map['AuthorizationURL'])) {
            $model->authorizationURL = $map['AuthorizationURL'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
        }

        if (isset($map['SessionURI'])) {
            $model->sessionURI = $map['SessionURI'];
        }

        return $model;
    }
}
