<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListJobsResponseBody\jobs\jobInfo;

class jobs extends Model
{
    /**
     * @var jobInfo[]
     */
    public $jobInfo;
    protected $_name = [
        'jobInfo' => 'JobInfo',
    ];

    public function validate()
    {
        if (\is_array($this->jobInfo)) {
            Model::validateArray($this->jobInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobInfo) {
            if (\is_array($this->jobInfo)) {
                $res['JobInfo'] = [];
                $n1 = 0;
                foreach ($this->jobInfo as $item1) {
                    $res['JobInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['JobInfo'])) {
            if (!empty($map['JobInfo'])) {
                $model->jobInfo = [];
                $n1 = 0;
                foreach ($map['JobInfo'] as $item1) {
                    $model->jobInfo[$n1++] = jobInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
