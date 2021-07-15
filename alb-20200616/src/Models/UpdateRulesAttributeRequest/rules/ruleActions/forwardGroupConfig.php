<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions\forwardGroupConfig\serverGroupStickySession;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRulesAttributeRequest\rules\ruleActions\forwardGroupConfig\serverGroupTuples;
use AlibabaCloud\Tea\Model;

class forwardGroupConfig extends Model
{
    /**
     * @description 转发到的目的服务器组列表
     *
     * @var serverGroupTuples[]
     */
    public $serverGroupTuples;

    /**
     * @description 服务器组之间会话保持
     *
     * @var serverGroupStickySession
     */
    public $serverGroupStickySession;
    protected $_name = [
        'serverGroupTuples'        => 'ServerGroupTuples',
        'serverGroupStickySession' => 'ServerGroupStickySession',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverGroupTuples) {
            $res['ServerGroupTuples'] = [];
            if (null !== $this->serverGroupTuples && \is_array($this->serverGroupTuples)) {
                $n = 0;
                foreach ($this->serverGroupTuples as $item) {
                    $res['ServerGroupTuples'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serverGroupStickySession) {
            $res['ServerGroupStickySession'] = null !== $this->serverGroupStickySession ? $this->serverGroupStickySession->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return forwardGroupConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerGroupTuples'])) {
            if (!empty($map['ServerGroupTuples'])) {
                $model->serverGroupTuples = [];
                $n                        = 0;
                foreach ($map['ServerGroupTuples'] as $item) {
                    $model->serverGroupTuples[$n++] = null !== $item ? serverGroupTuples::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServerGroupStickySession'])) {
            $model->serverGroupStickySession = serverGroupStickySession::fromMap($map['ServerGroupStickySession']);
        }

        return $model;
    }
}
