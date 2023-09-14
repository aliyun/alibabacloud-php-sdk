<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleActions;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleActions\trafficMirrorConfig\mirrorGroupConfig;
use AlibabaCloud\Tea\Model;

class trafficMirrorConfig extends Model
{
    /**
     * @description The configuration of the server group to which traffic is mirrored.
     *
     * @var mirrorGroupConfig
     */
    public $mirrorGroupConfig;
    protected $_name = [
        'mirrorGroupConfig' => 'MirrorGroupConfig',
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

        return $model;
    }
}
