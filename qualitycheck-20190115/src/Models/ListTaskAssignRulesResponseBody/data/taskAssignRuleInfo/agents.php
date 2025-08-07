<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\agents\agent;

class agents extends Model
{
    /**
     * @var agent[]
     */
    public $agent;
    protected $_name = [
        'agent' => 'Agent',
    ];

    public function validate()
    {
        if (\is_array($this->agent)) {
            Model::validateArray($this->agent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agent) {
            if (\is_array($this->agent)) {
                $res['Agent'] = [];
                $n1 = 0;
                foreach ($this->agent as $item1) {
                    $res['Agent'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Agent'])) {
            if (!empty($map['Agent'])) {
                $model->agent = [];
                $n1 = 0;
                foreach ($map['Agent'] as $item1) {
                    $model->agent[$n1] = agent::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
