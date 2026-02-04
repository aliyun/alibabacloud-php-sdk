<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CheckInstanceForDeleteResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CheckInstanceForDeleteResponseBody\checkInstanceResult\restrictScenarios;

class checkInstanceResult extends Model
{
    /**
     * @var bool
     */
    public $deletable;

    /**
     * @var restrictScenarios[]
     */
    public $restrictScenarios;
    protected $_name = [
        'deletable' => 'Deletable',
        'restrictScenarios' => 'RestrictScenarios',
    ];

    public function validate()
    {
        if (\is_array($this->restrictScenarios)) {
            Model::validateArray($this->restrictScenarios);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deletable) {
            $res['Deletable'] = $this->deletable;
        }

        if (null !== $this->restrictScenarios) {
            if (\is_array($this->restrictScenarios)) {
                $res['RestrictScenarios'] = [];
                $n1 = 0;
                foreach ($this->restrictScenarios as $item1) {
                    $res['RestrictScenarios'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Deletable'])) {
            $model->deletable = $map['Deletable'];
        }

        if (isset($map['RestrictScenarios'])) {
            if (!empty($map['RestrictScenarios'])) {
                $model->restrictScenarios = [];
                $n1 = 0;
                foreach ($map['RestrictScenarios'] as $item1) {
                    $model->restrictScenarios[$n1] = restrictScenarios::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
