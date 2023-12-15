<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeInvitationListResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example consortium-lianmenyumingyi-hc5d1bwlulg7
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example abc@alibaba.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 1544411108000
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example 1544411108000
     *
     * @var string
     */
    public $sendTime;
    protected $_name = [
        'code'         => 'Code',
        'consortiumId' => 'ConsortiumId',
        'email'        => 'Email',
        'expireTime'   => 'ExpireTime',
        'sendTime'     => 'SendTime',
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
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->sendTime) {
            $res['SendTime'] = $this->sendTime;
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
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['SendTime'])) {
            $model->sendTime = $map['SendTime'];
        }

        return $model;
    }
}
