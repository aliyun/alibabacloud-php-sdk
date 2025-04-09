<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class DeleteAgentProfilesRequest extends Model
{
    /**
     * @var string[]
     */
    public $agentProfileIds;

    /**
     * @var string
     */
    public $appIp;
    protected $_name = [
        'agentProfileIds' => 'AgentProfileIds',
        'appIp' => 'AppIp',
    ];

    public function validate()
    {
        if (\is_array($this->agentProfileIds)) {
            Model::validateArray($this->agentProfileIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentProfileIds) {
            if (\is_array($this->agentProfileIds)) {
                $res['AgentProfileIds'] = [];
                $n1 = 0;
                foreach ($this->agentProfileIds as $item1) {
                    $res['AgentProfileIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->appIp) {
            $res['AppIp'] = $this->appIp;
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
        if (isset($map['AgentProfileIds'])) {
            if (!empty($map['AgentProfileIds'])) {
                $model->agentProfileIds = [];
                $n1 = 0;
                foreach ($map['AgentProfileIds'] as $item1) {
                    $model->agentProfileIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AppIp'])) {
            $model->appIp = $map['AppIp'];
        }

        return $model;
    }
}
