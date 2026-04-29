<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\BindPolarClawAgentResponseBody;

use AlibabaCloud\Dara\Model;

class binding extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $channel;
    protected $_name = [
        'accountId' => 'AccountId',
        'agentId' => 'AgentId',
        'channel' => 'Channel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        return $model;
    }
}
