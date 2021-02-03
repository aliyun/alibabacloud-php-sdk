<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaProducingJobsResponseBody\mediaProducingJobList;
use AlibabaCloud\Tea\Model;

class ListMediaProducingJobsResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var mediaProducingJobList[]
     */
    public $mediaProducingJobList;
    protected $_name = [
        'requestId'             => 'RequestId',
        'mediaProducingJobList' => 'MediaProducingJobList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->mediaProducingJobList) {
            $res['MediaProducingJobList'] = [];
            if (null !== $this->mediaProducingJobList && \is_array($this->mediaProducingJobList)) {
                $n = 0;
                foreach ($this->mediaProducingJobList as $item) {
                    $res['MediaProducingJobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMediaProducingJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MediaProducingJobList'])) {
            if (!empty($map['MediaProducingJobList'])) {
                $model->mediaProducingJobList = [];
                $n                            = 0;
                foreach ($map['MediaProducingJobList'] as $item) {
                    $model->mediaProducingJobList[$n++] = null !== $item ? mediaProducingJobList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
