<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryDNAJobListResponseBody\jobList;

class QueryDNAJobListResponseBody extends Model
{
    /**
     * @var jobList[]
     */
    public $jobList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobList'   => 'JobList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->jobList)) {
            Model::validateArray($this->jobList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobList) {
            if (\is_array($this->jobList)) {
                $res['JobList'] = [];
                $n1             = 0;
                foreach ($this->jobList as $item1) {
                    $res['JobList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['JobList'])) {
            if (!empty($map['JobList'])) {
                $model->jobList = [];
                $n1             = 0;
                foreach ($map['JobList'] as $item1) {
                    $model->jobList[$n1++] = jobList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
