<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class CreateUserAuthenticateOptionsResponseBody extends Model
{
    /**
     * @example 2343246776
     *
     * @var string
     */
    public $challengeBase64;

    /**
     * @example {\"subscribeEvent\":false,\"installAgent\":false}
     *
     * @var string
     */
    public $options;

    /**
     * @example D0F570B0-89CE-07F2-B41E-F97E089E13C6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'challengeBase64' => 'ChallengeBase64',
        'options'         => 'Options',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->challengeBase64) {
            $res['ChallengeBase64'] = $this->challengeBase64;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserAuthenticateOptionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChallengeBase64'])) {
            $model->challengeBase64 = $map['ChallengeBase64'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
