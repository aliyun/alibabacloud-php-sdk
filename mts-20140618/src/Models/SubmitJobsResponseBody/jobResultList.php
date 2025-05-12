<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult;

class jobResultList extends Model
{
    /**
     * @var jobResult[]
     */
    public $jobResult;
    protected $_name = [
        'jobResult' => 'JobResult',
    ];

    public function validate()
    {
        if (\is_array($this->jobResult)) {
            Model::validateArray($this->jobResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobResult) {
            if (\is_array($this->jobResult)) {
                $res['JobResult'] = [];
                $n1 = 0;
                foreach ($this->jobResult as $item1) {
                    $res['JobResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['JobResult'])) {
            if (!empty($map['JobResult'])) {
                $model->jobResult = [];
                $n1 = 0;
                foreach ($map['JobResult'] as $item1) {
                    $model->jobResult[$n1++] = jobResult::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
