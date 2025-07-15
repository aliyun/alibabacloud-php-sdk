<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListEdgeTranscodeJobResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\ListEdgeTranscodeJobResponseBody\jobList\job;
use AlibabaCloud\Tea\Model;

class jobList extends Model
{
    /**
     * @var job[]
     */
    public $job;
    protected $_name = [
        'job' => 'Job',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->job) {
            $res['Job'] = [];
            if (null !== $this->job && \is_array($this->job)) {
                $n = 0;
                foreach ($this->job as $item) {
                    $res['Job'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Job'])) {
            if (!empty($map['Job'])) {
                $model->job = [];
                $n = 0;
                foreach ($map['Job'] as $item) {
                    $model->job[$n++] = null !== $item ? job::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
