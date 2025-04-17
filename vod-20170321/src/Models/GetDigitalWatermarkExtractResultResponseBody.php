<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetDigitalWatermarkExtractResultResponseBody\aiExtractResultList;

class GetDigitalWatermarkExtractResultResponseBody extends Model
{
    /**
     * @var aiExtractResultList[]
     */
    public $aiExtractResultList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aiExtractResultList' => 'AiExtractResultList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->aiExtractResultList)) {
            Model::validateArray($this->aiExtractResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiExtractResultList) {
            if (\is_array($this->aiExtractResultList)) {
                $res['AiExtractResultList'] = [];
                $n1 = 0;
                foreach ($this->aiExtractResultList as $item1) {
                    $res['AiExtractResultList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AiExtractResultList'])) {
            if (!empty($map['AiExtractResultList'])) {
                $model->aiExtractResultList = [];
                $n1 = 0;
                foreach ($map['AiExtractResultList'] as $item1) {
                    $model->aiExtractResultList[$n1++] = aiExtractResultList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
