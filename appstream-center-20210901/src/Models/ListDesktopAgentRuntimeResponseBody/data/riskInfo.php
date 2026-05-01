<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListDesktopAgentRuntimeResponseBody\data;

use AlibabaCloud\Dara\Model;

class riskInfo extends Model
{
    /**
     * @var bool
     */
    public $agentUninstalled;

    /**
     * @var bool
     */
    public $channelModified;

    /**
     * @var bool
     */
    public $modelModified;
    protected $_name = [
        'agentUninstalled' => 'AgentUninstalled',
        'channelModified' => 'ChannelModified',
        'modelModified' => 'ModelModified',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentUninstalled) {
            $res['AgentUninstalled'] = $this->agentUninstalled;
        }

        if (null !== $this->channelModified) {
            $res['ChannelModified'] = $this->channelModified;
        }

        if (null !== $this->modelModified) {
            $res['ModelModified'] = $this->modelModified;
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
        if (isset($map['AgentUninstalled'])) {
            $model->agentUninstalled = $map['AgentUninstalled'];
        }

        if (isset($map['ChannelModified'])) {
            $model->channelModified = $map['ChannelModified'];
        }

        if (isset($map['ModelModified'])) {
            $model->modelModified = $map['ModelModified'];
        }

        return $model;
    }
}
