<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class UpdateJobRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var JobSpec[]
     */
    public $jobSpecs;

    /**
     * @var int
     */
    public $priority;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'jobSpecs' => 'JobSpecs',
        'priority' => 'Priority',
    ];

    public function validate()
    {
        if (\is_array($this->jobSpecs)) {
            Model::validateArray($this->jobSpecs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->jobSpecs) {
            if (\is_array($this->jobSpecs)) {
                $res['JobSpecs'] = [];
                $n1 = 0;
                foreach ($this->jobSpecs as $item1) {
                    $res['JobSpecs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['JobSpecs'])) {
            if (!empty($map['JobSpecs'])) {
                $model->jobSpecs = [];
                $n1 = 0;
                foreach ($map['JobSpecs'] as $item1) {
                    $model->jobSpecs[$n1] = JobSpec::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
