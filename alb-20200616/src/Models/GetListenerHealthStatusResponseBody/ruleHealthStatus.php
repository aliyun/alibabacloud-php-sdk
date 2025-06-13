<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\ruleHealthStatus\serverGroupInfos;

class ruleHealthStatus extends Model
{
    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var serverGroupInfos[]
     */
    public $serverGroupInfos;
    protected $_name = [
        'ruleId' => 'RuleId',
        'serverGroupInfos' => 'ServerGroupInfos',
    ];

    public function validate()
    {
        if (\is_array($this->serverGroupInfos)) {
            Model::validateArray($this->serverGroupInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->serverGroupInfos) {
            if (\is_array($this->serverGroupInfos)) {
                $res['ServerGroupInfos'] = [];
                $n1 = 0;
                foreach ($this->serverGroupInfos as $item1) {
                    $res['ServerGroupInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['ServerGroupInfos'])) {
            if (!empty($map['ServerGroupInfos'])) {
                $model->serverGroupInfos = [];
                $n1 = 0;
                foreach ($map['ServerGroupInfos'] as $item1) {
                    $model->serverGroupInfos[$n1] = serverGroupInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
