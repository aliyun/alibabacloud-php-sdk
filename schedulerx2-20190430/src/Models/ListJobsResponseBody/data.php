<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody\data\jobs;

class data extends Model
{
    /**
     * @var jobs[]
     */
    public $jobs;
    protected $_name = [
        'jobs' => 'Jobs',
    ];

    public function validate()
    {
        if (\is_array($this->jobs)) {
            Model::validateArray($this->jobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobs) {
            if (\is_array($this->jobs)) {
                $res['Jobs'] = [];
                $n1 = 0;
                foreach ($this->jobs as $item1) {
                    $res['Jobs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Jobs'])) {
            if (!empty($map['Jobs'])) {
                $model->jobs = [];
                $n1 = 0;
                foreach ($map['Jobs'] as $item1) {
                    $model->jobs[$n1++] = jobs::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
