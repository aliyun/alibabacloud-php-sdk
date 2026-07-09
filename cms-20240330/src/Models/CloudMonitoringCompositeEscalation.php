<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class CloudMonitoringCompositeEscalation extends Model
{
    /**
     * @var CloudMonitoringCompositeEscalationEntry[]
     */
    public $escalations;

    /**
     * @var string
     */
    public $relation;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var int
     */
    public $times;
    protected $_name = [
        'escalations' => 'escalations',
        'relation' => 'relation',
        'severity' => 'severity',
        'times' => 'times',
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

        if (null !== $this->relation) {
            $res['relation'] = $this->relation;
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        if (null !== $this->times) {
            $res['times'] = $this->times;
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
                    $model->escalations[$n1] = CloudMonitoringCompositeEscalationEntry::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['relation'])) {
            $model->relation = $map['relation'];
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        if (isset($map['times'])) {
            $model->times = $map['times'];
        }

        return $model;
    }
}
