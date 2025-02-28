<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class JobDiagnosisSymptoms extends Model
{
    /**
     * @var JobDiagnosisSymptom
     */
    public $autopilot;
    /**
     * @var JobDiagnosisSymptom[]
     */
    public $others;
    /**
     * @var JobDiagnosisSymptom[]
     */
    public $runtime;
    /**
     * @var JobDiagnosisSymptom[]
     */
    public $startup;
    /**
     * @var JobDiagnosisSymptom[]
     */
    public $state;
    /**
     * @var JobDiagnosisSymptom[]
     */
    public $troubleshooting;
    protected $_name = [
        'autopilot'       => 'autopilot',
        'others'          => 'others',
        'runtime'         => 'runtime',
        'startup'         => 'startup',
        'state'           => 'state',
        'troubleshooting' => 'troubleshooting',
    ];

    public function validate()
    {
        if (null !== $this->autopilot) {
            $this->autopilot->validate();
        }
        if (\is_array($this->others)) {
            Model::validateArray($this->others);
        }
        if (\is_array($this->runtime)) {
            Model::validateArray($this->runtime);
        }
        if (\is_array($this->startup)) {
            Model::validateArray($this->startup);
        }
        if (\is_array($this->state)) {
            Model::validateArray($this->state);
        }
        if (\is_array($this->troubleshooting)) {
            Model::validateArray($this->troubleshooting);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autopilot) {
            $res['autopilot'] = null !== $this->autopilot ? $this->autopilot->toArray($noStream) : $this->autopilot;
        }

        if (null !== $this->others) {
            if (\is_array($this->others)) {
                $res['others'] = [];
                $n1            = 0;
                foreach ($this->others as $item1) {
                    $res['others'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->runtime) {
            if (\is_array($this->runtime)) {
                $res['runtime'] = [];
                $n1             = 0;
                foreach ($this->runtime as $item1) {
                    $res['runtime'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->startup) {
            if (\is_array($this->startup)) {
                $res['startup'] = [];
                $n1             = 0;
                foreach ($this->startup as $item1) {
                    $res['startup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->state) {
            if (\is_array($this->state)) {
                $res['state'] = [];
                $n1           = 0;
                foreach ($this->state as $item1) {
                    $res['state'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->troubleshooting) {
            if (\is_array($this->troubleshooting)) {
                $res['troubleshooting'] = [];
                $n1                     = 0;
                foreach ($this->troubleshooting as $item1) {
                    $res['troubleshooting'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['autopilot'])) {
            $model->autopilot = JobDiagnosisSymptom::fromMap($map['autopilot']);
        }

        if (isset($map['others'])) {
            if (!empty($map['others'])) {
                $model->others = [];
                $n1            = 0;
                foreach ($map['others'] as $item1) {
                    $model->others[$n1++] = JobDiagnosisSymptom::fromMap($item1);
                }
            }
        }

        if (isset($map['runtime'])) {
            if (!empty($map['runtime'])) {
                $model->runtime = [];
                $n1             = 0;
                foreach ($map['runtime'] as $item1) {
                    $model->runtime[$n1++] = JobDiagnosisSymptom::fromMap($item1);
                }
            }
        }

        if (isset($map['startup'])) {
            if (!empty($map['startup'])) {
                $model->startup = [];
                $n1             = 0;
                foreach ($map['startup'] as $item1) {
                    $model->startup[$n1++] = JobDiagnosisSymptom::fromMap($item1);
                }
            }
        }

        if (isset($map['state'])) {
            if (!empty($map['state'])) {
                $model->state = [];
                $n1           = 0;
                foreach ($map['state'] as $item1) {
                    $model->state[$n1++] = JobDiagnosisSymptom::fromMap($item1);
                }
            }
        }

        if (isset($map['troubleshooting'])) {
            if (!empty($map['troubleshooting'])) {
                $model->troubleshooting = [];
                $n1                     = 0;
                foreach ($map['troubleshooting'] as $item1) {
                    $model->troubleshooting[$n1++] = JobDiagnosisSymptom::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
