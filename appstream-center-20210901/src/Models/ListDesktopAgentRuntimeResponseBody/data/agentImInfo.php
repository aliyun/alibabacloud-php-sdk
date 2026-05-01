<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListDesktopAgentRuntimeResponseBody\data;

use AlibabaCloud\Dara\Model;

class agentImInfo extends Model
{
    /**
     * @var string
     */
    public $agentImStatus;

    /**
     * @var string
     */
    public $cloudSpaceStatus;
    protected $_name = [
        'agentImStatus' => 'AgentImStatus',
        'cloudSpaceStatus' => 'CloudSpaceStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentImStatus) {
            $res['AgentImStatus'] = $this->agentImStatus;
        }

        if (null !== $this->cloudSpaceStatus) {
            $res['CloudSpaceStatus'] = $this->cloudSpaceStatus;
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
        if (isset($map['AgentImStatus'])) {
            $model->agentImStatus = $map['AgentImStatus'];
        }

        if (isset($map['CloudSpaceStatus'])) {
            $model->cloudSpaceStatus = $map['CloudSpaceStatus'];
        }

        return $model;
    }
}
