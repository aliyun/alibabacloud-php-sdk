<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWafPhasesResponseBody\phases;

use AlibabaCloud\SDK\ESA\V20240910\Models\WafBatchRuleShared;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig;
use AlibabaCloud\Tea\Model;

class rulesets extends Model
{
    /**
     * @description The ID of the WAF ruleset.[](~~2850233~~)
     *
     * @example 10000001
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the WAF ruleset.
     *
     * @example example
     *
     * @var string
     */
    public $name;

    /**
     * @description The rule configurations in the WAF ruleset.
     *
     * @var WafRuleConfig[]
     */
    public $rules;

    /**
     * @description The configurations shared by the rules in the WAF ruleset.
     *
     * @var WafBatchRuleShared
     */
    public $shared;
    protected $_name = [
        'id'     => 'Id',
        'name'   => 'Name',
        'rules'  => 'Rules',
        'shared' => 'Shared',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->shared) {
            $res['Shared'] = null !== $this->shared ? $this->shared->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rulesets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? WafRuleConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Shared'])) {
            $model->shared = WafBatchRuleShared::fromMap($map['Shared']);
        }

        return $model;
    }
}
