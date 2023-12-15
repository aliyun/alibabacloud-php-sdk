<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class AcceptEthereumInvitationRequest extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'code'  => 'Code',
        'token' => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AcceptEthereumInvitationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
