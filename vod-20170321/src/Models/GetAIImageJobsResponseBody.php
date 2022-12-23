<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIImageJobsResponseBody\AIImageJobList;
use AlibabaCloud\Tea\Model;

class GetAIImageJobsResponseBody extends Model
{
    /**
     * @description The image AI processing jobs.
     *
     * @var AIImageJobList[]
     */
    public $AIImageJobList;

    /**
     * @description The ID of the request.
     *
     * @example 7721B494-1F78-4E*****E8-A7CEE7315BFA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIImageJobList' => 'AIImageJobList',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIImageJobList) {
            $res['AIImageJobList'] = [];
            if (null !== $this->AIImageJobList && \is_array($this->AIImageJobList)) {
                $n = 0;
                foreach ($this->AIImageJobList as $item) {
                    $res['AIImageJobList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetAIImageJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIImageJobList'])) {
            if (!empty($map['AIImageJobList'])) {
                $model->AIImageJobList = [];
                $n                     = 0;
                foreach ($map['AIImageJobList'] as $item) {
                    $model->AIImageJobList[$n++] = null !== $item ? AIImageJobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
