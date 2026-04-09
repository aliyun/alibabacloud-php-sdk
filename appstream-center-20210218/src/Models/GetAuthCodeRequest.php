<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210218\Models;

use AlibabaCloud\Dara\Model;

class GetAuthCodeRequest extends Model
{
    /**
     * @var bool
     */
    public $autoCreateUser;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $externalUserId;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $tokenType;
    protected $_name = [
        'autoCreateUser' => 'AutoCreateUser',
        'endUserId' => 'EndUserId',
        'externalUserId' => 'ExternalUserId',
        'policy' => 'Policy',
        'tokenType' => 'TokenType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCreateUser) {
            $res['AutoCreateUser'] = $this->autoCreateUser;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->externalUserId) {
            $res['ExternalUserId'] = $this->externalUserId;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->tokenType) {
            $res['TokenType'] = $this->tokenType;
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
        if (isset($map['AutoCreateUser'])) {
            $model->autoCreateUser = $map['AutoCreateUser'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['ExternalUserId'])) {
            $model->externalUserId = $map['ExternalUserId'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['TokenType'])) {
            $model->tokenType = $map['TokenType'];
        }

        return $model;
    }
}
