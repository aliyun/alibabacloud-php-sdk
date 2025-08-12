<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\simpleEscalation\escalations;

class simpleEscalation extends Model
{
    /**
     * @var escalations[]
     */
    public $escalations;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var int
     */
    public $period;
    protected $_name = [
        'escalations' => 'escalations',
        'metricName' => 'metricName',
        'period' => 'period',
    ];

    public function validate()
    {
        if (\is_array($this->escalations)) {
            Model::validateArray($this->escalations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->escalations) {
            if (\is_array($this->escalations)) {
                $res['escalations'] = [];
                $n1 = 0;
                foreach ($this->escalations as $item1) {
                    $res['escalations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metricName) {
            $res['metricName'] = $this->metricName;
        }

        if (null !== $this->period) {
            $res['period'] = $this->period;
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
        if (isset($map['escalations'])) {
            if (!empty($map['escalations'])) {
                $model->escalations = [];
                $n1 = 0;
                foreach ($map['escalations'] as $item1) {
                    $model->escalations[$n1] = escalations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['metricName'])) {
            $model->metricName = $map['metricName'];
        }

        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        return $model;
    }
}
