<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\ListPolarClawBindingsResponseBody;

use AlibabaCloud\Dara\Model;

class bindings extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $channelAccountId;
    protected $_name = [
        'agentId' => 'AgentId',
        'channel' => 'Channel',
        'channelAccountId' => 'ChannelAccountId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->channelAccountId) {
            $res['ChannelAccountId'] = $this->channelAccountId;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['ChannelAccountId'])) {
            $model->channelAccountId = $map['ChannelAccountId'];
        }

        return $model;
    }
}
