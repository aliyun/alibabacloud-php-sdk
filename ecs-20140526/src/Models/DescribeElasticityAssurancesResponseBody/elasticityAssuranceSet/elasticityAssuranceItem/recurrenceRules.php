<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem\recurrenceRules\recurrenceRule;

class recurrenceRules extends Model
{
    /**
     * @var recurrenceRule[]
     */
    public $recurrenceRule;
    protected $_name = [
        'recurrenceRule' => 'RecurrenceRule',
    ];

    public function validate()
    {
        if (\is_array($this->recurrenceRule)) {
            Model::validateArray($this->recurrenceRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recurrenceRule) {
            if (\is_array($this->recurrenceRule)) {
                $res['RecurrenceRule'] = [];
                $n1                    = 0;
                foreach ($this->recurrenceRule as $item1) {
                    $res['RecurrenceRule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RecurrenceRule'])) {
            if (!empty($map['RecurrenceRule'])) {
                $model->recurrenceRule = [];
                $n1                    = 0;
                foreach ($map['RecurrenceRule'] as $item1) {
                    $model->recurrenceRule[$n1++] = recurrenceRule::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
