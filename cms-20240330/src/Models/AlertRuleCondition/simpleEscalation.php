<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition;

use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\simpleEscalation\escalations;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalations) {
            $res['escalations'] = [];
            if (null !== $this->escalations && \is_array($this->escalations)) {
                $n = 0;
                foreach ($this->escalations as $item) {
                    $res['escalations'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return simpleEscalation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['escalations'])) {
            if (!empty($map['escalations'])) {
                $model->escalations = [];
                $n = 0;
                foreach ($map['escalations'] as $item) {
                    $model->escalations[$n++] = null !== $item ? escalations::fromMap($item) : $item;
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
