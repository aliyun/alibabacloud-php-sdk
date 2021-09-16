<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserGuideStatusRequest extends Model
{
    /**
     * @description 幂等校验
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description INCIDENT_GUIDE	事件线 INCIDENT_GUIDE配置人员 USER_GUIDE 服务组 SERVICE_GROUP_GUIDE 服务 SERVICE_GUIDE 集成配置 MONITOR_GUIDE 流转规则 ROUTE_RULE_GUIDE 通知订阅 NOTICE_GUIDE
     *
     * @var string
     */
    public $guideAction;
    protected $_name = [
        'clientToken' => 'clientToken',
        'guideAction' => 'guideAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->guideAction) {
            $res['guideAction'] = $this->guideAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserGuideStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['guideAction'])) {
            $model->guideAction = $map['guideAction'];
        }

        return $model;
    }
}
