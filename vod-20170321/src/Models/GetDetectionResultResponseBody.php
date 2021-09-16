<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetDetectionResultResponseBody\detectionResultList;
use AlibabaCloud\Tea\Model;

class GetDetectionResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var detectionResultList[]
     */
    public $detectionResultList;
    protected $_name = [
        'requestId'           => 'RequestId',
        'detectionResultList' => 'DetectionResultList',
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
        if (null !== $this->detectionResultList) {
            $res['DetectionResultList'] = [];
            if (null !== $this->detectionResultList && \is_array($this->detectionResultList)) {
                $n = 0;
                foreach ($this->detectionResultList as $item) {
                    $res['DetectionResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDetectionResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DetectionResultList'])) {
            if (!empty($map['DetectionResultList'])) {
                $model->detectionResultList = [];
                $n                          = 0;
                foreach ($map['DetectionResultList'] as $item) {
                    $model->detectionResultList[$n++] = null !== $item ? detectionResultList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
