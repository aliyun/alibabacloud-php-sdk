<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListWafPhasesResponseBody\phases;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafBatchRuleShared;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig;

class rulesets extends Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var WafRuleConfig[]
     */
    public $rules;
    /**
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
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        if (null !== $this->shared) {
            $this->shared->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1           = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->shared) {
            $res['Shared'] = null !== $this->shared ? $this->shared->toArray($noStream) : $this->shared;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1           = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1++] = WafRuleConfig::fromMap($item1);
                }
            }
        }

        if (isset($map['Shared'])) {
            $model->shared = WafBatchRuleShared::fromMap($map['Shared']);
        }

        return $model;
    }
}
