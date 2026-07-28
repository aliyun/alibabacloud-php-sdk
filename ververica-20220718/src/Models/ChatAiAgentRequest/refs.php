<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\ChatAiAgentRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ChatAiAgentRequest\refs\jobs;

class refs extends Model
{
    /**
     * @var jobs[]
     */
    public $jobs;

    /**
     * @var string[]
     */
    public $skills;
    protected $_name = [
        'jobs' => 'jobs',
        'skills' => 'skills',
    ];

    public function validate()
    {
        if (\is_array($this->jobs)) {
            Model::validateArray($this->jobs);
        }
        if (\is_array($this->skills)) {
            Model::validateArray($this->skills);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobs) {
            if (\is_array($this->jobs)) {
                $res['jobs'] = [];
                $n1 = 0;
                foreach ($this->jobs as $item1) {
                    $res['jobs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skills) {
            if (\is_array($this->skills)) {
                $res['skills'] = [];
                $n1 = 0;
                foreach ($this->skills as $item1) {
                    $res['skills'][$n1] = $item1;
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
        if (isset($map['jobs'])) {
            if (!empty($map['jobs'])) {
                $model->jobs = [];
                $n1 = 0;
                foreach ($map['jobs'] as $item1) {
                    $model->jobs[$n1] = jobs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['skills'])) {
            if (!empty($map['skills'])) {
                $model->skills = [];
                $n1 = 0;
                foreach ($map['skills'] as $item1) {
                    $model->skills[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
