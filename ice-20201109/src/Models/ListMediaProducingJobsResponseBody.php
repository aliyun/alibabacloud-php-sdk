<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaProducingJobsResponseBody\mediaProducingJobList;
use AlibabaCloud\Tea\Model;

class ListMediaProducingJobsResponseBody extends Model
{
    /**
     * @var mediaProducingJobList[]
     */
    public $mediaProducingJobList;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaProducingJobList' => 'MediaProducingJobList',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaProducingJobList) {
            $res['MediaProducingJobList'] = [];
            if (null !== $this->mediaProducingJobList && \is_array($this->mediaProducingJobList)) {
                $n = 0;
                foreach ($this->mediaProducingJobList as $item) {
                    $res['MediaProducingJobList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListMediaProducingJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaProducingJobList'])) {
            if (!empty($map['MediaProducingJobList'])) {
                $model->mediaProducingJobList = [];
                $n                            = 0;
                foreach ($map['MediaProducingJobList'] as $item) {
                    $model->mediaProducingJobList[$n++] = null !== $item ? mediaProducingJobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
