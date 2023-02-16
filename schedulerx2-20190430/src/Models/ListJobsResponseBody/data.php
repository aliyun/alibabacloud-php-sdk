<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody\data\jobs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The jobs and their details.
     *
     * @var jobs[]
     */
    public $jobs;
    protected $_name = [
        'jobs' => 'Jobs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobs) {
            $res['Jobs'] = [];
            if (null !== $this->jobs && \is_array($this->jobs)) {
                $n = 0;
                foreach ($this->jobs as $item) {
                    $res['Jobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Jobs'])) {
            if (!empty($map['Jobs'])) {
                $model->jobs = [];
                $n           = 0;
                foreach ($map['Jobs'] as $item) {
                    $model->jobs[$n++] = null !== $item ? jobs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
