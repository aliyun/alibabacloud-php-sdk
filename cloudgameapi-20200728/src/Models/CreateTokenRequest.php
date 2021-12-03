<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class CreateTokenRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $currentToken;

    /**
     * @var string
     */
    public $session;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'currentToken' => 'CurrentToken',
        'session'      => 'Session',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->currentToken) {
            $res['CurrentToken'] = $this->currentToken;
        }
        if (null !== $this->session) {
            $res['Session'] = $this->session;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CurrentToken'])) {
            $model->currentToken = $map['CurrentToken'];
        }
        if (isset($map['Session'])) {
            $model->session = $map['Session'];
        }

        return $model;
    }
}
