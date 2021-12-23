<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\ruleHealthStatus\serverGroupInfos;
use AlibabaCloud\Tea\Model;

class ruleHealthStatus extends Model
{
    /**
     * @description 转发规则ID
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description 服务器组健康检查结果
     *
     * @var serverGroupInfos[]
     */
    public $serverGroupInfos;
    protected $_name = [
        'ruleId'           => 'RuleId',
        'serverGroupInfos' => 'ServerGroupInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->serverGroupInfos) {
            $res['ServerGroupInfos'] = [];
            if (null !== $this->serverGroupInfos && \is_array($this->serverGroupInfos)) {
                $n = 0;
                foreach ($this->serverGroupInfos as $item) {
                    $res['ServerGroupInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleHealthStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['ServerGroupInfos'])) {
            if (!empty($map['ServerGroupInfos'])) {
                $model->serverGroupInfos = [];
                $n                       = 0;
                foreach ($map['ServerGroupInfos'] as $item) {
                    $model->serverGroupInfos[$n++] = null !== $item ? serverGroupInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
