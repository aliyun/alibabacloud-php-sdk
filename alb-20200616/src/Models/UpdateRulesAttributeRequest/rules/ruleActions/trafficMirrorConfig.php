<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions\trafficMirrorConfig\mirrorGroupConfig;
use AlibabaCloud\Tea\Model;

class trafficMirrorConfig extends Model
{
    /**
     * @description 镜像目标类型
     *
     * @var string
     */
    public $targetType;

    /**
     * @description 镜像至服务器组
     *
     * @var mirrorGroupConfig
     */
    public $mirrorGroupConfig;
    protected $_name = [
        'targetType'        => 'TargetType',
        'mirrorGroupConfig' => 'MirrorGroupConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->mirrorGroupConfig) {
            $res['MirrorGroupConfig'] = null !== $this->mirrorGroupConfig ? $this->mirrorGroupConfig->toMap() : null;
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
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['MirrorGroupConfig'])) {
            $model->mirrorGroupConfig = mirrorGroupConfig::fromMap($map['MirrorGroupConfig']);
        }

        return $model;
    }
}
