<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\CreateEthereumInvitationResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'code'       => 'Code',
        'createTime' => 'CreateTime',
        'expireTime' => 'ExpireTime',
        'token'      => 'Token',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
