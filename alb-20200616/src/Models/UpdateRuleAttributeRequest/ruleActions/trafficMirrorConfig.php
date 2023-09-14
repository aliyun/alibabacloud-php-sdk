<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleActions;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleActions\trafficMirrorConfig\mirrorGroupConfig;
use AlibabaCloud\Tea\Model;

class trafficMirrorConfig extends Model
{
    /**
     * @description The configuration of the server group to which traffic is mirrored.
     *
     * @var mirrorGroupConfig
     */
    public $mirrorGroupConfig;

    /**
     * @description The type of destination to which network traffic is mirrored. Valid values:
     *
     *   **ForwardGroupMirror**: a server group
     *   **SlsMirror**: Log Service
     *
     * @example ForwardGroupMirror
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'mirrorGroupConfig' => 'MirrorGroupConfig',
        'targetType'        => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mirrorGroupConfig) {
            $res['MirrorGroupConfig'] = null !== $this->mirrorGroupConfig ? $this->mirrorGroupConfig->toMap() : null;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficMirrorConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MirrorGroupConfig'])) {
            $model->mirrorGroupConfig = mirrorGroupConfig::fromMap($map['MirrorGroupConfig']);
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
