<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class EditSessionRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $sessionId;

    /**
     * @var string
     */
    public $asset;

    /**
     * @var int
     */
    public $TTL;

    /**
     * @var string
     */
    public $loginSession;
    protected $_name = [
        'sourceIp'     => 'SourceIp',
        'sessionId'    => 'SessionId',
        'asset'        => 'Asset',
        'TTL'          => 'TTL',
        'loginSession' => 'LoginSession',
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
        if (null !== $this->asset) {
            $res['Asset'] = $this->asset;
        }
        if (null !== $this->TTL) {
            $res['TTL'] = $this->TTL;
        }
        if (null !== $this->loginSession) {
            $res['LoginSession'] = $this->loginSession;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditSessionRequest
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
        if (isset($map['Asset'])) {
            $model->asset = $map['Asset'];
        }
        if (isset($map['TTL'])) {
            $model->TTL = $map['TTL'];
        }
        if (isset($map['LoginSession'])) {
            $model->loginSession = $map['LoginSession'];
        }

        return $model;
    }
}
