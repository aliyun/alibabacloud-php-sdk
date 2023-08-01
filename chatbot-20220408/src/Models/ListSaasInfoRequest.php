<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class ListSaasInfoRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example DS,FAQ
     *
     * @var string
     */
    public $saasGroupCodes;

    /**
     * @example userTest
     *
     * @var string
     */
    public $saasName;
    protected $_name = [
        'agentKey'       => 'AgentKey',
        'saasGroupCodes' => 'SaasGroupCodes',
        'saasName'       => 'SaasName',
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
        if (null !== $this->saasGroupCodes) {
            $res['SaasGroupCodes'] = $this->saasGroupCodes;
        }
        if (null !== $this->saasName) {
            $res['SaasName'] = $this->saasName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSaasInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['SaasGroupCodes'])) {
            $model->saasGroupCodes = $map['SaasGroupCodes'];
        }
        if (isset($map['SaasName'])) {
            $model->saasName = $map['SaasName'];
        }

        return $model;
    }
}
