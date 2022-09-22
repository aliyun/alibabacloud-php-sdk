<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\QueryDNAJobListResponseBody\jobList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobList) {
            $res['JobList'] = [];
            if (null !== $this->jobList && \is_array($this->jobList)) {
                $n = 0;
                foreach ($this->jobList as $item) {
                    $res['JobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDNAJobListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobList'])) {
            if (!empty($map['JobList'])) {
                $model->jobList = [];
                $n              = 0;
                foreach ($map['JobList'] as $item) {
                    $model->jobList[$n++] = null !== $item ? jobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
