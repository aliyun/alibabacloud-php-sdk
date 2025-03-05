<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions\trafficMirrorConfig\mirrorGroupConfig;
use AlibabaCloud\Tea\Model;

class trafficMirrorConfig extends Model
{
    /**
     * @var mirrorGroupConfig
     */
    public $mirrorGroupConfig;

    /**
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
