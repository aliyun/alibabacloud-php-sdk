<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class ListSaasInfoRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $saasGroupCodes;

    /**
     * @var string
     */
    public $saasName;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'saasGroupCodes' => 'SaasGroupCodes',
        'saasName' => 'SaasName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
