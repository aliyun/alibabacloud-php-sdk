<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class GenerateUserAccessTokenRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example a***bcx@gmail.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 1000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @example 8882022040000000171
     *
     * @var string
     */
    public $foreignId;

    /**
     * @var string
     */
    public $nick;

    /**
     * @example 1381111****
     *
     * @var string
     */
    public $telephone;
    protected $_name = [
        'agentKey'   => 'AgentKey',
        'email'      => 'Email',
        'expireTime' => 'ExpireTime',
        'extraInfo'  => 'ExtraInfo',
        'foreignId'  => 'ForeignId',
        'nick'       => 'Nick',
        'telephone'  => 'Telephone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->foreignId) {
            $res['ForeignId'] = $this->foreignId;
        }
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->telephone) {
            $res['Telephone'] = $this->telephone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateUserAccessTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['ForeignId'])) {
            $model->foreignId = $map['ForeignId'];
        }
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['Telephone'])) {
            $model->telephone = $map['Telephone'];
        }

        return $model;
    }
}
