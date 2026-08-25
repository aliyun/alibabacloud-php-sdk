<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class GetChallengeResponseBody extends Model
{
    /**
     * @var string
     */
    public $challengeToken;

    /**
     * @var string
     */
    public $nonce;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'challengeToken' => 'ChallengeToken',
        'nonce' => 'Nonce',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->challengeToken) {
            $res['ChallengeToken'] = $this->challengeToken;
        }

        if (null !== $this->nonce) {
            $res['Nonce'] = $this->nonce;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ChallengeToken'])) {
            $model->challengeToken = $map['ChallengeToken'];
        }

        if (isset($map['Nonce'])) {
            $model->nonce = $map['Nonce'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
