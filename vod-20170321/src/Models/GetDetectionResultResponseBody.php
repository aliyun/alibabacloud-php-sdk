<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetDetectionResultResponseBody\detectionResultList;
use AlibabaCloud\Tea\Model;

class GetDetectionResultResponseBody extends Model
{
    /**
     * @var detectionResultList[]
     */
    public $detectionResultList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'detectionResultList' => 'DetectionResultList',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detectionResultList) {
            $res['DetectionResultList'] = [];
            if (null !== $this->detectionResultList && \is_array($this->detectionResultList)) {
                $n = 0;
                foreach ($this->detectionResultList as $item) {
                    $res['DetectionResultList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetDetectionResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetectionResultList'])) {
            if (!empty($map['DetectionResultList'])) {
                $model->detectionResultList = [];
                $n                          = 0;
                foreach ($map['DetectionResultList'] as $item) {
                    $model->detectionResultList[$n++] = null !== $item ? detectionResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
