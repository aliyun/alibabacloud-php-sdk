<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\agents\agent;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agent) {
            $res['Agent'] = [];
            if (null !== $this->agent && \is_array($this->agent)) {
                $n = 0;
                foreach ($this->agent as $item) {
                    $res['Agent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Agent'])) {
            if (!empty($map['Agent'])) {
                $model->agent = [];
                $n            = 0;
                foreach ($map['Agent'] as $item) {
                    $model->agent[$n++] = null !== $item ? agent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
