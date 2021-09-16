<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIImageJobsResponseBody\AIImageJobList;
use AlibabaCloud\Tea\Model;

class GetAIImageJobsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var AIImageJobList[]
     */
    public $AIImageJobList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'AIImageJobList' => 'AIImageJobList',
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
        if (null !== $this->AIImageJobList) {
            $res['AIImageJobList'] = [];
            if (null !== $this->AIImageJobList && \is_array($this->AIImageJobList)) {
                $n = 0;
                foreach ($this->AIImageJobList as $item) {
                    $res['AIImageJobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AIImageJobList'])) {
            if (!empty($map['AIImageJobList'])) {
                $model->AIImageJobList = [];
                $n                     = 0;
                foreach ($map['AIImageJobList'] as $item) {
                    $model->AIImageJobList[$n++] = null !== $item ? AIImageJobList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
