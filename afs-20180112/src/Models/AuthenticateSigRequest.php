<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\Tea\Model;

class AuthenticateSigRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $sig;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $remoteIp;
    protected $_name = [
        'sourceIp'  => 'SourceIp',
        'sessionId' => 'SessionId',
        'appKey'    => 'AppKey',
        'sig'       => 'Sig',
        'token'     => 'Token',
        'scene'     => 'Scene',
        'remoteIp'  => 'RemoteIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->sig) {
            $res['Sig'] = $this->sig;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->remoteIp) {
            $res['RemoteIp'] = $this->remoteIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthenticateSigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['Sig'])) {
            $model->sig = $map['Sig'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['RemoteIp'])) {
            $model->remoteIp = $map['RemoteIp'];
        }

        return $model;
    }
}
