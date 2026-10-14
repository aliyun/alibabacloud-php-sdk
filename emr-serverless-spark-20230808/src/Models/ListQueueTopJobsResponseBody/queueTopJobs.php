<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListQueueTopJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListQueueTopJobsResponseBody\queueTopJobs\jobs;

class queueTopJobs extends Model
{
    /**
     * @var jobs[]
     */
    public $jobs;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $totalCu;

    /**
     * @var int
     */
    public $totalJobCount;
    protected $_name = [
        'jobs' => 'jobs',
        'maxResults' => 'maxResults',
        'queueName' => 'queueName',
        'totalCu' => 'totalCu',
        'totalJobCount' => 'totalJobCount',
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
                $res['jobs'] = [];
                $n1 = 0;
                foreach ($this->jobs as $item1) {
                    $res['jobs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->queueName) {
            $res['queueName'] = $this->queueName;
        }

        if (null !== $this->totalCu) {
            $res['totalCu'] = $this->totalCu;
        }

        if (null !== $this->totalJobCount) {
            $res['totalJobCount'] = $this->totalJobCount;
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

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['queueName'])) {
            $model->queueName = $map['queueName'];
        }

        if (isset($map['totalCu'])) {
            $model->totalCu = $map['totalCu'];
        }

        if (isset($map['totalJobCount'])) {
            $model->totalJobCount = $map['totalJobCount'];
        }

        return $model;
    }
}
