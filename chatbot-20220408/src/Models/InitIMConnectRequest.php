<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class InitIMConnectRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $from;

    /**
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
