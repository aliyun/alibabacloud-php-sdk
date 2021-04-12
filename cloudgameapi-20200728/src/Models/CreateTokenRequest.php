<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class CreateTokenRequest extends Model
{
    /**
     * @var string
     */
    public $session;

    /**
     * @var string
     */
    public $currentToken;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'session'      => 'Session',
        'currentToken' => 'CurrentToken',
        'clientToken'  => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->session) {
            $res['Session'] = $this->session;
        }
        if (null !== $this->currentToken) {
            $res['CurrentToken'] = $this->currentToken;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (isset($map['Session'])) {
            $model->session = $map['Session'];
        }
        if (isset($map['CurrentToken'])) {
            $model->currentToken = $map['CurrentToken'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
