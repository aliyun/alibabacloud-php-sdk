<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetDigitalWatermarkExtractResultResponseBody\aiExtractResultList;
use AlibabaCloud\Tea\Model;

class GetDigitalWatermarkExtractResultResponseBody extends Model
{
    /**
     * @var aiExtractResultList[]
     */
    public $aiExtractResultList;

    /**
     * @example 42E0554B-80F4-4921-****-ACFB22CAAAD0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aiExtractResultList' => 'AiExtractResultList',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiExtractResultList) {
            $res['AiExtractResultList'] = [];
            if (null !== $this->aiExtractResultList && \is_array($this->aiExtractResultList)) {
                $n = 0;
                foreach ($this->aiExtractResultList as $item) {
                    $res['AiExtractResultList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetDigitalWatermarkExtractResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiExtractResultList'])) {
            if (!empty($map['AiExtractResultList'])) {
                $model->aiExtractResultList = [];
                $n                          = 0;
                foreach ($map['AiExtractResultList'] as $item) {
                    $model->aiExtractResultList[$n++] = null !== $item ? aiExtractResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
