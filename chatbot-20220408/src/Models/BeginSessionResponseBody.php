<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class BeginSessionResponseBody extends Model
{
    /**
     * @description 请求id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 欢迎语
     *
     * @var string
     */
    public $welcomeMessage;
    protected $_name = [
        'requestId'      => 'RequestId',
        'welcomeMessage' => 'WelcomeMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->welcomeMessage) {
            $res['WelcomeMessage'] = $this->welcomeMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BeginSessionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WelcomeMessage'])) {
            $model->welcomeMessage = $map['WelcomeMessage'];
        }

        return $model;
    }
}
