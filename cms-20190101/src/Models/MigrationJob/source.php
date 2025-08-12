<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\source\rule;
use AlibabaCloud\SDK\Cms\V20190101\Models\MigrationJob\source\targets;

class source extends Model
{
    /**
     * @var rule
     */
    public $rule;

    /**
     * @var targets[]
     */
    public $targets;
    protected $_name = [
        'rule' => 'Rule',
        'targets' => 'Targets',
    ];

    public function validate()
    {
        if (null !== $this->rule) {
            $this->rule->validate();
        }
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rule) {
            $res['Rule'] = null !== $this->rule ? $this->rule->toArray($noStream) : $this->rule;
        }

        if (null !== $this->targets) {
            if (\is_array($this->targets)) {
                $res['Targets'] = [];
                $n1 = 0;
                foreach ($this->targets as $item1) {
                    $res['Targets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Rule'])) {
            $model->rule = rule::fromMap($map['Rule']);
        }

        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n1 = 0;
                foreach ($map['Targets'] as $item1) {
                    $model->targets[$n1] = targets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
