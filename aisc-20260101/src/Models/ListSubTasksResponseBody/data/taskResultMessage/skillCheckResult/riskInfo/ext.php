<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\skillCheckResult\riskInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\skillCheckResult\riskInfo\ext\config;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\skillCheckResult\riskInfo\ext\guardrail;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\skillCheckResult\riskInfo\ext\sensitive;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\skillCheckResult\riskInfo\ext\virus;

class ext extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var guardrail
     */
    public $guardrail;

    /**
     * @var sensitive
     */
    public $sensitive;

    /**
     * @var virus[]
     */
    public $virus;
    protected $_name = [
        'config' => 'Config',
        'guardrail' => 'Guardrail',
        'sensitive' => 'Sensitive',
        'virus' => 'Virus',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (null !== $this->guardrail) {
            $this->guardrail->validate();
        }
        if (null !== $this->sensitive) {
            $this->sensitive->validate();
        }
        if (\is_array($this->virus)) {
            Model::validateArray($this->virus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->guardrail) {
            $res['Guardrail'] = null !== $this->guardrail ? $this->guardrail->toArray($noStream) : $this->guardrail;
        }

        if (null !== $this->sensitive) {
            $res['Sensitive'] = null !== $this->sensitive ? $this->sensitive->toArray($noStream) : $this->sensitive;
        }

        if (null !== $this->virus) {
            if (\is_array($this->virus)) {
                $res['Virus'] = [];
                $n1 = 0;
                foreach ($this->virus as $item1) {
                    $res['Virus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }

        if (isset($map['Guardrail'])) {
            $model->guardrail = guardrail::fromMap($map['Guardrail']);
        }

        if (isset($map['Sensitive'])) {
            $model->sensitive = sensitive::fromMap($map['Sensitive']);
        }

        if (isset($map['Virus'])) {
            if (!empty($map['Virus'])) {
                $model->virus = [];
                $n1 = 0;
                foreach ($map['Virus'] as $item1) {
                    $model->virus[$n1] = virus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
