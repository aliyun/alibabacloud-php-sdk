<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListEdgeTranscodeJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ListEdgeTranscodeJobResponseBody\jobList\job;

class jobList extends Model
{
    /**
     * @var job[]
     */
    public $job;
    protected $_name = [
        'job' => 'Job',
    ];

    public function validate()
    {
        if (\is_array($this->job)) {
            Model::validateArray($this->job);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->job) {
            if (\is_array($this->job)) {
                $res['Job'] = [];
                $n1 = 0;
                foreach ($this->job as $item1) {
                    $res['Job'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Job'])) {
            if (!empty($map['Job'])) {
                $model->job = [];
                $n1 = 0;
                foreach ($map['Job'] as $item1) {
                    $model->job[$n1] = job::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
