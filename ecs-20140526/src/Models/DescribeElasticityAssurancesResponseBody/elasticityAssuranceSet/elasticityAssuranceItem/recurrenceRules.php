<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesResponseBody\elasticityAssuranceSet\elasticityAssuranceItem\recurrenceRules\recurrenceRule;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recurrenceRule) {
            $res['RecurrenceRule'] = [];
            if (null !== $this->recurrenceRule && \is_array($this->recurrenceRule)) {
                $n = 0;
                foreach ($this->recurrenceRule as $item) {
                    $res['RecurrenceRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recurrenceRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecurrenceRule'])) {
            if (!empty($map['RecurrenceRule'])) {
                $model->recurrenceRule = [];
                $n                     = 0;
                foreach ($map['RecurrenceRule'] as $item) {
                    $model->recurrenceRule[$n++] = null !== $item ? recurrenceRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
