<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class InitIMConnectRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description This parameter is required.
     *
     * @example 8XNBzDucJv
     *
     * @var string
     */
    public $from;

    /**
     * @example QUM4SndaY3VPMjhkQldDZUNOR0ZaTmZ5R3NBY0FKWHJ4OGc4dERZbEJzcjNIKzFiS1RyTjhXRUpBYmVpQlpsakprNDRFVkdxcy9HWVk2RXZvalU3bHhxRkJlc1NBUXZwdHFKOTE2UTNwamQ4b1U4N3dEbmhyRjc4R2hOQStvMnMrYkV2dlVpSHNvWC96SEVNZWRqMjBuMXdjNklpamJzaDNWYllnUldDZGhJPQ==
     *
     * @var string
     */
    public $userAccessToken;
    protected $_name = [
        'agentKey'        => 'AgentKey',
        'from'            => 'From',
        'userAccessToken' => 'UserAccessToken',
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
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->userAccessToken) {
            $res['UserAccessToken'] = $this->userAccessToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitIMConnectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['UserAccessToken'])) {
            $model->userAccessToken = $map['UserAccessToken'];
        }

        return $model;
    }
}
