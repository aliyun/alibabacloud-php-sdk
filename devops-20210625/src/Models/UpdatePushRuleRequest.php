<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePushRuleRequest\ruleInfos;

class UpdatePushRuleRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var ruleInfos[]
     */
    public $ruleInfos;

    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'accessToken' => 'accessToken',
        'ruleInfos' => 'ruleInfos',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
        if (\is_array($this->ruleInfos)) {
            Model::validateArray($this->ruleInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }

        if (null !== $this->ruleInfos) {
            if (\is_array($this->ruleInfos)) {
                $res['ruleInfos'] = [];
                $n1 = 0;
                foreach ($this->ruleInfos as $item1) {
                    $res['ruleInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
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
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }

        if (isset($map['ruleInfos'])) {
            if (!empty($map['ruleInfos'])) {
                $model->ruleInfos = [];
                $n1 = 0;
                foreach ($map['ruleInfos'] as $item1) {
                    $model->ruleInfos[$n1] = ruleInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
